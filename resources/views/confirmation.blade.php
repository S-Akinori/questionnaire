<x-app-layout>
    <div class="top-img-container m-auto">
        <img src="/storage/img/wb_amazon.jpg" alt="アマゾンギフト画像" class="">
    </div>

    <div class="confirmation-title my-3">
        以下の内容でよろしければ「完了」ボタンをクリックしてください。<br>
        内容を変更する場合は「戻る」ボタンをクリックしてください
    </div>


    <div>
        <p>【1ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
            <p>{{session('name')}}</p>
        </x-form-group>
        <x-form-group>
            <x-slot name="title">Q.2. 挙式日をお知らせください。 *</x-slot>
            <p>{{session('date')}}</p>
        </x-form-group>
        <x-form-group>
            <x-slot name="title">Q.3. 披露宴会場名をお知らせください。 *</x-slot>
            <p>{{session('venue')}}</p>
        </x-form-group>
        <x-form-group>
            <x-slot name="title">Q.4. 会場の都道府県をお知らせください。 *</x-slot>
            <p>{{session('place')}}</p>
        </x-form-group>
        <x-form-group>
            <x-slot name="title">Q.5. メールアドレスを入力してください。 *</x-slot>
            <p>{{session('email')}}</p>
            <a href="{{route('form.show', 'form1')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>

    <div>
        <p>【2ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.6. ご購入いただいた商品をお知らせください。<br>
    【プロフィールムービー】 *</x-slot>
            @foreach (session('profile_movie') as $item => $value)
            <div class="my-3">
                <p>{{$value['name']}}</p>
                <div class="preview">
                    <img src="{{$value['img_path']}}" alt="{{$value['name']}}">
                </div>
            </div>
            @endforeach
            <a href="{{route('form.show', 'form2')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>

    <div>
        <p>【3ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.7. ご購入いただいた商品をお知らせください。<br>【オープニングムービー】 *</x-slot>
            @foreach (session('opening_movie') as $item => $value)
            <div class="my-3">
                <p>{{$value['name']}}</p>
                <div class="preview">
                    <img src="{{$value['img_path']}}" alt="{{$value['name']}}">
                </div>
            </div>
            @endforeach
            <a href="{{route('form.show', 'form3')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>

    <div>
        <p>【4ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.8. ご購入いただいた商品をお知らせください。<br>【エンドロールムービー】 *</x-slot>
            @foreach (session('ending_movie') as $item => $value)
            <div class="my-3">
                <p>{{$value['name']}}</p>
                <div class="preview">
                    <img src="{{$value['img_path']}}" alt="{{$value['name']}}">
                </div>
            </div>
            @endforeach
            <a href="{{route('form.show', 'form4')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【5ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.9. Lcmアトリエを知ったきっかけは *</x-slot>
            @foreach (session('way_to_get_info') as $item => $value)
            <p>{{$value}}</p>
            @endforeach
            <a href="{{route('form.show', 'form5')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【6ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.10. ホームページのわかりやすさは *</x-slot>
            <p>{{session('about_homepage')}}</p>
            <a href="{{route('form.show', 'form6')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【7ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.11. コメントシート作成や写真の送付方法は *</x-slot>
            <p>{{session('about_sending')}}</p>
            <a href="{{route('form.show', 'form7')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【8ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.12. 担当者の対応は *</x-slot>
            <p>{{session('about_staff')}}</p>
            <a href="{{route('form.show', 'form8')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【9ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.13. 総合的な満足度は *</x-slot>
            <p>{{session('about_all')}}</p>
            <a href="{{route('form.show', 'form9')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【10ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.14. 当店を利用された感想をお聞かせください。 *</x-slot>
            <p>{{session('thoughts_service')}}</p>
            <a href="{{route('form.show', 'form10')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【11ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.15. 制作されたムービーを上映した後、周りの反応は如何でしたか? *</x-slot>
            <p>{{session('thoughts_movie')}}</p>
            <a href="{{route('form.show', 'form11')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【12ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.16. 改善してほしい点や要望などあればお聞かせください。</x-slot>
            <p>{{session('opinion')}}</p>
            <a href="{{route('form.show', 'form12')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    

    <div>
        <p>【13ページ目】</p>
        <x-form-group>
            <x-slot name="title">Q.17. 披露宴の写真をアップロードしてください。*</x-slot>
            <p>【1枚目】</p>
            <div class="preview my-3">
                <img src="{{session('photo_1')}}" alt="photo1">
            </div>
        </x-form-group>
        <x-form-group>
            <p>【2枚目】</p>
            <div class="preview my-3">
                <img src="{{session('photo_2')}}" alt="photo2">
            </div>
            <a href="{{route('form.show', 'form13')}}" class="btn btn-secondary">戻る</a>
        </x-form-group>
    </div>    


    <div class="d-flex justify-content-end">
        <form action="{{route('form.saveData')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>

</x-app-layout>