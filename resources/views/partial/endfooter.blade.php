
@foreach ($arr_endfooter[0] as $mp)
    
<div class="footer-info-col2">
    @if(isset($arr_endfooter[$mp['id']]))
    @foreach ($arr_endfooter[$mp['id']] as $item)
    {!! $item['name'] !!} <br>
    @endforeach
     
    
@endif
</div>

@endforeach