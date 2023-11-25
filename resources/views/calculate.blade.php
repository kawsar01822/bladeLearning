@if($sum == 100)
    <h2>Result is hundred</h2>
@elseif($sum == 1000)
    <h2>Result is thousand</h2>
@elseif($sum < 100)
    <h2>Result is less than hundred</h2>
@else
    <h2>Result is out of our range</h2>
@endif




@switch($sum)
    @case(100)
        <h2>Result is hundred</h2>
        @break
    @case(1000)
        <h2>Result is thousand</h2>
        @break
    @case(500)
        <h2>Result is hundred</h2>
        @break
    @default
        <h2>Result is not in our range</h2>
@endswitch



<ul>
@for($i=0;$i<10;$i++)
    <li>{{$i+1}}</li>
@endfor
</ul>



