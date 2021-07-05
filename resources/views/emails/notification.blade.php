<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール通知</title>
</head>
<body>
    <p>アンケートの回答がありました。</p>
    
    <div>
        <p>━━━━━━━━━━━━━━━━━━━</p>
        <div>
            {{-- <p>【id】<br> {{$data['id']}}</p> --}}
            {{-- <p>【回答日時】 <br> {{$data['created_at']}}</p> --}}
            @foreach ($data as $item => $value)
                @if($item == 'photo_1' || $item == 'photo_2')
                    {{-- <p>【{{$columns_jp[$item]}}】<br> <a href="{{$value}}">{{$value}}</a></p> --}}
                    {{-- <div style="width: 60%; height: 60%;">
                        <img src="data:image/{{$value['ext']}};base64,{{$value['content']}}" alt="{{$item}}" style="width: 100%; height: 100%;">
                    </div> --}}
                @elseif ($item !== 'id' && $item !== 'created_at' && $item !== 'updated_at')
                    <p>【{{$columns_jp[$item]}}】<br> {{$value}}</p>
                @endif
            @endforeach
        </div>
    
    </div>
</body>
</html>
