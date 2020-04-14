<?php

use App\Post;
use App\Sermon;

function check_user_permissions($request, $actionName = NULL, $id = NULL)
{
    // current user
    $currentUser = $request->user();

    // current action name
    if ($actionName) {
        $currentActionName = $actionName;
    }
    else {
        $currentActionName = $request->route()->getActionName();
    }
    list($controller, $method) = explode('@', $currentActionName);
    $controller = str_replace(["App\\Http\\Controllers\\Backend\\", "Controller"], "", $controller);

    $crudPermissionsMap = [
        // 'create' => ['create', 'store'],
        // 'update' => ['edit', 'update'],
        // 'delete' => ['destroy', 'restore', 'forceDestroy'],
        // 'read'   => ['index', 'view']
        'crud' => ['create', 'store', 'edit', 'update', 'destroy', 'restore', 'forceDestroy', 'index', 'view']
    ];

    $classesMap = [
        'Posts' => 'post',
        'Sermons' => 'sermon',
        'Events' => 'event',
        'Pastors' => 'pastor',
        'Galleries' => 'gallery',
        'Bible' => 'bible',
        'Users' => 'user'
    ];

    foreach ($crudPermissionsMap as $permission => $methods)
    {
        // if the current method exists in methods list,
        // we'll check the permission
        if (in_array($method, $methods) && isset($classesMap[$controller]))
        {
            $className = $classesMap[$controller];

            if ($className == 'post' && in_array($method, ['edit', 'update', 'destroy', 'restore', 'forceDestroy']))
            {
                $id = !is_null($id) ? $id : $request->route('post');

                // if the current user has not update-others-post/delete-others-post permission
                // make sure she/he only modify his/her own post
                if ( $id && (!$currentUser->can('update-others-post') || !$currentUser->can('delete-others-post')) )
                {
                    $post = Post::withTrashed()->find($id);
                    if ($post->user_id !== $currentUser->id) {
                        return false;
                    }
                }
            }


            // if the user has not permission don't allow the next request
            elseif ( ! $currentUser->can("{$permission}-{$className}")) {
                return false;
            }

            break;
        }
    }

    return true;
}
