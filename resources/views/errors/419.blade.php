<x-app-layout>
    <p>以下のいずれかの理由でエラーが起こりました。お手数ですが、再度アンケートの回答をお願いします。</p>
    <div class="alert alert-danger">
        <ul>
            <li>アンケート開始から一定時間が経過</li>
            <li>不正な処理が行われた</li>
        </ul>
    </div>
    <a href="{{route('home')}}" class="btn btn-primary">確認</a>
</x-app-layout>
