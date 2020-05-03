<div class="widget widget_search">
    <form action="{{route('search.result')}}">
        <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text">
        <label><input type="submit" value=""></label>
    </form>
</div>
