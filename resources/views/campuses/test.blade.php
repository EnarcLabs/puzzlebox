<ul>
@foreach($campus as $key => $value)
    <li>{{ $value->name }}</li>
    @endforeach
</ul>
<select>
    @foreach($campus as $key => $value)
        <option>{{ $value->name }}</option>
    @endforeach
</select>