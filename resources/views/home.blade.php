<x-app-layout>
    <div class="top-img-container m-auto">
        <img src="/storage/img/wb_amazon.jpg" alt="アマゾンギフト画像" class="">
    </div>

    <div>
        <div class="my-5">
            <h2 class="title">アンケートのご協力お願いします</h2>
            <p>
                アンケートをご回答いただきました方全員に謝礼として<strong>ギフト券1,000円分</strong>を進呈いたします。
            </p>
            <p>
                回答確認後、下記のメールアドレスより順次ご連絡させていただきます。
            </p>
            <p>
                information@lcm-atelier.com
            </p>
        </div>

        <div class="my-5">
            <h2 class="title">【ご回答に当たって】</h2>
            <ul>
                <li class="mb-3">
                    アンケート対象者は、結婚式後で弊社の商品をご購入いただいた方に限ります。<br>
                    <span class="text-small">※アンケートは、新郎新婦さまのどちらか一人1回限りとさせていただきます。</span>
                </li>
                <li>
                    アンケートの回答およびご提供いただいたお写真は、弊社ホームページの<a href="https://lcm-atelier.com/category/customer-voice" class="link-primary" target="_blank">「お客様の声」</a>ページにて掲載させていただきます。
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{route('form.show', 'form1')}}" class="btn btn-secondary ">同意する</a>
    </div>

</x-app-layout>