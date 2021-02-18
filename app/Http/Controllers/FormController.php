<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Mail\ThankyouMail;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;

class FormController extends Controller
{
    public $places = [
        '北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県',
    ];

    //values of checkboxes
    public $profile_movie_value = [
        ['name'=>'購入なし', 'img_path'=>'storage/img/no_movie.jpg'],
        ['name'=>'シンプル', 'img_path'=>'storage/img/profile_movies/simpleR1.7.jpg'],
        ['name'=>'チェリッシュ', 'img_path'=>'storage/img/profile_movies/cherishTOP.jpg'],
        ['name'=>'チョークボード', 'img_path'=>'storage/img/profile_movies/chalkboard3.jpg'],
        ['name'=>'ハピネス', 'img_path'=>'storage/img/profile_movies/happiness-pvTOP.jpg'],
        ['name'=>'花鳥風月', 'img_path'=>'storage/img/profile_movies/Kacho_FugetsuTOP.jpg'],
        ['name'=>'奏-SOH-', 'img_path'=>'storage/img/profile_movies/SOH-PVTOP.jpg'],
        ['name'=>'App', 'img_path'=>'storage/img/profile_movies/appPV.jpg'],
        ['name'=>'Best Day', 'img_path'=>'storage/img/profile_movies/Best-DayPVtop.jpg'],
        ['name'=>'Botanical', 'img_path'=>'storage/img/profile_movies/BotanicalTop.jpg'],
        ['name'=>'Classicus', 'img_path'=>'storage/img/profile_movies/ClassicusTOP.jpg'],
        ['name'=>'film', 'img_path'=>'storage/img/profile_movies/film.jpg'],
        ['name'=>'Good for', 'img_path'=>'storage/img/profile_movies/good-forTop.jpg'],
        ['name'=>'Garden', 'img_path'=>'storage/img/profile_movies/top.jpg'],
        ['name'=>'Happy Balloon', 'img_path'=>'storage/img/profile_movies/top.jpg'],
        ['name'=>'little bird', 'img_path'=>'storage/img/profile_movies/little-birdPVNtop.jpg'],
        ['name'=>'luxury & POP', 'img_path'=>'storage/img/profile_movies/luxurypop.jpg'],
        ['name'=>'memory', 'img_path'=>'storage/img/profile_movies/memory4-1.jpg'],
        ['name'=>'special day', 'img_path'=>'storage/img/profile_movies/SPtop.jpg'],
        ['name'=>'Sunny Day', 'img_path'=>'storage/img/profile_movies/sunnyday3-1.jpg'],
        ['name'=>'The cinema', 'img_path'=>'storage/img/profile_movies/The-cinemaPVTOP.jpg']
    ];

    public $opening_movie_value = [
        ['name'=>"購入なし", 'img_path'=>"storage/img/no_movie.jpg"],
        ['name'=>"スタート!!!", 'img_path'=>"storage/img/opening_movies/3.jpg"],
        ['name'=>"チェリッシュ", 'img_path'=>"storage/img/opening_movies/o_cherishtop.jpg"],
        ['name'=>"モノガタリ", 'img_path'=>"storage/img/opening_movies/monogataritop.jpg"],
        ['name'=>"運命", 'img_path'=>"storage/img/opening_movies/destinyTOP.jpg"],
        ['name'=>"花鳥風月", 'img_path'=>"storage/img/opening_movies/fugetsu_oTOP.jpg"],
        ['name'=>"App", 'img_path'=>"storage/img/opening_movies/App_openingTop.jpg"],
        ['name'=>"candle", 'img_path'=>"storage/img/opening_movies/candleop4-1.jpg"],
        ['name'=>"Good for" , 'img_path'=>"storage/img/opening_movies/Good-for-NEW-OP.jpg"],
        ['name'=>"Just Married", 'img_path'=>"storage/img/opening_movies/Just-marriedOTOP.jpg"],
        ['name'=>"LET'S GO!", 'img_path'=>"storage/img/opening_movies/LET’S-GOTop.jpg"],
        ['name'=>"Mr & Mrs", 'img_path'=>"storage/img/opening_movies/Mr-Mrs-TOP.jpg"],
        ['name'=>"MUSIC", 'img_path'=>"storage/img/opening_movies/BEAT_openingT.jpg"],
        ['name'=>"naturally", 'img_path'=>"storage/img/opening_movies/naturally_opening_top.jpg"],
        ['name'=>"Our Wedding", 'img_path'=>"storage/img/opening_movies/ourwedding4.jpg"],
        ['name'=>"Sunny Day", 'img_path'=>"storage/img/opening_movies/sunnydayop.jpg"],
        ['name'=>"Water Color", 'img_path'=>"storage/img/opening_movies/water_color.jpg"],
        ['name'=>"&...Tree", 'img_path'=>"storage/img/opening_movies/…Treetop.jpg"],
    ];

    public $ending_movie_value = [
        ['name'=>"購入なし", 'img_path'=>"storage/img/no_movie.jpg"],
        ['name'=>"クラシック", 'img_path'=>"storage/img/ending_movies/classic1.jpg"],
        ['name'=>"シンプル", 'img_path'=>"storage/img/ending_movies/simpleED2.jpg"],
        ['name'=>"チョークボード", 'img_path'=>"storage/img/ending_movies/chalkboarded1.jpg"],
        ['name'=>"ハピネス", 'img_path'=>"storage/img/ending_movies/e_happiness2.jpg"],
        ['name'=>"Best Dat", 'img_path'=>"storage/img/ending_movies/Best-Day1.jpg"],
        ['name'=>"Happy Balloon", 'img_path'=>"storage/img/ending_movies/happy_balloon_edtop.jpg"],
        ['name'=>"HOME", 'img_path'=>"storage/img/ending_movies/HOME-endrollTOP.jpg"],
        ['name'=>"naturally", 'img_path'=>"storage/img/ending_movies/naturallyEDtop.jpg"],
        ['name'=>"special day", 'img_path'=>"storage/img/ending_movies/special-dayEDTOP.jpg"],
        ['name'=>"The cinema", 'img_path'=>"storage/img/ending_movies/The-cinemaED.jpg"],
    ];

    public function index() {
        return view('welcome');
    }

    public function show($view) {
        // dd(session()->all());

        if($view == 'form1') {
            if(session('date')) {
                $old_date = explode('-', session('date'));
            } else {
                $old_date = [-1, -1, -1];
            }

            $date = explode('-', date('Y-n-j'));
            return view($view, ['date'=>$date, 'places'=>$this->places, 'old_date'=>$old_date]);
        }
        else if($view == 'form2') {
            $old[] = '';
            if(session('profile_movie')) {
                $old = array_column(session('profile_movie'), 'name');
            }
            return view($view, ['profile_movie_value'=>$this->profile_movie_value, 'old'=>$old]);

        }
        else if($view == 'form3') {
            $old[] = '';
            if(session('opening_movie')) {
                $old = array_column(session('opening_movie'), 'name');
            }
            return view($view, ['opening_movie_value'=>$this->opening_movie_value, 'old'=>$old]);

        }
        else if($view == 'form4') {
            $old[] = '';
            if(session('ending_movie')) {
                $old = array_column(session('ending_movie'), 'name');
            }
            return view($view, ['ending_movie_value'=>$this->ending_movie_value, 'old'=>$old]);

        } else if($view == 'form5') {
            $old[] = '';
            if(session('way_to_get_info')){
                foreach(session('way_to_get_info') as $item) {
                    if(is_array($item)) {
                        $old['その他'] = $item['その他'];
                    } else {
                        $old[] = $item;
                    }
                }
            }
            // dd($old);
            return view($view, ['ending_movie_value'=>$this->ending_movie_value, 'old'=>$old]);
        } else if($view == 'confirmation') {
            session(['is_confirmation_page'=>true]);
            return view($view);

        } else {
            return view($view);
        }
    }

    public function getData(Request $request) {

        // dd($request->all());

        // validation
        $request->validate([
            'answer.*'=>'required|max:255',
            'answer.*.*'=>'required',
            'answer.email.0'=>'same:answer.email.1',
            "answer.*.file"=>'nullable|mimes:jpg,png|max:4096',
            'file.validation.*'=>"required",
            'answer.*.textarea'=>'min:100',
            'answer.opinion.textarea'=>'min:0',
        ],[
            'answer.*.required' => '*のマークがある項目は必ず入力してください',
            'answer.*.*.required' => '*のマークがある項目は必ず入力してください',
            'answer.email.0.same'=>'正しくメールアドレスを入力してください',
            "answer.*.file.mimes"=>'JPEGまたはPNG形式のファイルをアップロードしてください',
            'answer.*.textarea.min'=>':min文字以上でお願いします',
            'file.validation.*.required'=>'*のマークがある項目は必ず入力してください',
        ]);

        if(isset($request->answer['email'])) {
            if(Form::where('email', $request->answer['email'][0])->count() > 0) {
                return back()->withInput()->withErrors(['answer.email.0'=>'すでに使われているメールアドレスです']);
            }
        }

        if($request->answer == null && isset($request->file['validation'])) {
            return redirect()->route('form.show', $request->next);
        }

        $keys = array_keys($request->answer);

        for($i = 0; $i < count($keys) ; $i++) {
            $key = $keys[$i];
            if(isset($request->answer[$key]['check'])) {
                $request->validate([
                    "answer.$key.0"=>'required'
                ], [
                    "answer.$key.0.required"=>'*のマークがある項目は必ず入力してください'
                ]);
            }
        }

        // storing data
        for($i = 0 ; $i < count($keys) ; $i++) {
            $key = $keys[$i];
            
            if(isset($request->answer[$key]['check'])) {// checkboxの場合
                $data = $this->checkbox($key, $request->answer[$key]);

            } else if($key == 'email') { //emailの場合
                $data = $request->answer[$key][0];

            } else if(isset($request->answer[$key]['file'])) { //photo(file)の場合
                $file = $request->file("answer.$key.file");
                $data = $this->storeFile($key, $file);

            } else if(is_array($request->answer[$key])) {
                if(array_key_exists('textarea', $request->answer[$key])) {
                    $data = $request->answer[$key]['textarea'];
                }

            } else { //その他                    
                $data = $request->answer[$key];
            }

            session(["$key"=>$data]);
        }


        if(session('is_confirmation_page')) {
            return redirect()->route('form.show', 'confirmation');
        }
        return redirect()->route('form.show', $request->next);
    }

    // sending mail
    public function saveData() {
        // フォームを飛ばしたりしてないかのチェック->ミスがあった場合は不正処理として419エラーを出す
        $columns = Schema::getColumnListing('forms');
        for($i = 0 ; $i < count($columns) ; $i++) {
            if($columns[$i] == 'id'|| $columns[$i] == 'created_at' || $columns[$i] == 'updated_at') {
                continue;
            }

            if(!array_key_exists($columns[$i], session()->all())) {
                abort(419);
            } else {
                $data[$columns[$i]] = session($columns[$i]);
            }
        }

        // dd($data);
        // Form::create($data);

        $form = new Form();

        for($i = 0; $i < count($columns) ; $i++) {
            if($columns[$i] == 'id'|| $columns[$i] == 'created_at' || $columns[$i] == 'updated_at') {
                continue;
            }

            $key = $columns[$i];

            if(is_array($data[$key])) {
                $form->{"$key"} = json_encode($data[$key], JSON_UNESCAPED_UNICODE);
            } else {
                $form->{"$key"} = $data[$key];
            }
        }

        $form->save();

        $user = [
            'name'=>session('name'),
            'email'=>session('email'),
        ];

        $savedData = [
            'id'=>$form->id,
            'name'=>$form->name,
            'email'=>$form->email,
            'created_at'=>$form->created_at,
        ];

        Mail::to($user['email'])->send(new ThankyouMail($user));
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NotificationMail($savedData));
        session()->flush();
        return view('thankyou');
    }

    // custom function
    public function checkbox($key, $array) {
        for($i = 0 ; $i < count($array) - 1 ; $i++) {
            $json = json_decode($array[$i], true);
            if($json !== null) {
                $data[] = $json;
            } else {
                $data[] = $array[$i];
            }
        }

        return $data;
    }

    public function storeFile($key, $file) {
        $file_dir = 'public/img/uploaded';
        $file_path = $file->store($file_dir);
        $file_path = url('/') . '/' . str_replace('public', 'storage', $file_path);
        return $file_path;
    }
}