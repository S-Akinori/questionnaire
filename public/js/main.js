$(function() {
    // var now = new Date()
    // createDateOptions(now);
    // createPlaceOptions();
    
    $('#form').on('submit', function() {
        // not allowed to double click
        $('[type="submit"]').prop('disabled', true);
        $('.btn-prev').prop('disabled', true);

        $('#theDate').val($('#year').val() + '-' + $('#month').val() + '-' + $('#date').val());

        var info = {'その他': $('#otherInput').val()};
        info = JSON.stringify(info);
        $('#other').val(info);

        if(!$('#preview1').hasClass('hidden')) {
            $('#fileValid1').val('true');
        }

        if(!$('#preview2').hasClass('hidden')) {
            $('#fileValid2').val('true');
        }
    });

    // ファイル選択
    $('#selectFileButton1').on('click', function() {
        $('#file1').trigger('click');
    });
    $('#selectFileButton2').on('click', function() {
        $('#file2').trigger('click');
    });

    $('#deleteFileButton1').on('click', function() {
       removeImg('preview1');
       $('#file1').val('');
       $(this).addClass('hidden');
    })
    $('#deleteFileButton2').on('click', function() {
       removeImg('preview2'); 
       $('#file2').val('');
       $(this).addClass('hidden');
    })

    $('#file1').on('change', function(e) {
        previewImage('preview1', e)
        $('#deleteFileButton1').removeClass('hidden');
    })
    $('#file2').on('change', function(e) {
        previewImage('preview2', e)
        $('#deleteFileButton2').removeClass('hidden');
    })

});

/*
function createDateOptions(now) {
    var $yearSelect = $('#year');
    var $monthSelect = $('#month');
    var $dateSelect = $('#date');

    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var years = 3;
    var months = 12;
    var dates = 31;

    for(var i=0 ; i < years ; i++) {
        if(i+1 == year) {
            $yearSelect.append(`<option selected>${year-i}</option>`)
        } else {
            $yearSelect.append(`<option>${year - i}</option>`)
        }
    }

    for(var i=0 ; i < months ; i++) {
        if(i+1 == month) {
            $monthSelect.append(`<option selected>${i+1}</option>`)
        } else {
            $monthSelect.append(`<option>${i+1}</option>`)
        }
    }

    for(var i=0 ; i < dates ; i++) {
        if(i+1 == date) {
            $dateSelect.append(`<option selected>${i+1}</option>`)
        } else {
            $dateSelect.append(`<option>${i+1}</option>`)
        }
    }

}

function createPlaceOptions() {
    var array = [
        '北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県',
    ]

    var $placeSelect = $('#placeSelect')

    for(var i = 0 ; i < array.length ; i++) {
        $placeSelect.append(`<option>${array[i]}</option`)
    }

}
*/

function previewImage(id, e) {
    //ファイルオブジェクトを取得する
    var file = e.target.files[0];
    var reader = new FileReader();

    //画像でない場合は処理終了
    if(file.type.indexOf("image") < 0){
        alert("画像ファイルを指定してください。");
        return false;
    }

    var $previewContainer = $(`#${id}`);

    if($previewContainer.hasClass('hidden')) {
        $previewContainer.removeClass('hidden');
        $previewContainer.html('<img src="">')
    }

    var $previewImg = $(`#${id} img`);

    //アップロードした画像を設定する
    reader.onload = (function(file){
    return function(e){
        $previewImg.attr("src", e.target.result);
        $previewImg.attr("title", file.name);
    };
    })(file);
    reader.readAsDataURL(file);
}

function removeImg (id) {
    var $previewContainer = $(`#${id}`);
    var $previewImg = $(`#${id} img`);

    $previewImg.remove();
    $previewContainer.addClass('hidden');

}