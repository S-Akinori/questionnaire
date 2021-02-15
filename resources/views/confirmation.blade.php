<x-app-layout>
    <p>
        以下の内容でよろしければ「完了」ボタンをクリックしてください。<br>
        内容を変更する場合は「戻る」ボタンをクリックしてください
    </p>

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
        <p>{{session('answer.place')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.5. メールアドレスを入力してください。 *</x-slot>
        <p>{{session('email')}}</p>
    </x-form-group>

    <x-form-group>
        <x-slot name="title">Q.6. ご購入いただいた商品をお知らせください。
【プロフィールムービー】 *</x-slot>
        <p>{{session('name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>
    <x-form-group>
        <x-slot name="title">Q.1. ご注文時のお名前をお知らせください。 *</x-slot>
        <p>{{session('answer.name')}}</p>
    </x-form-group>

</x-app-layout>