//フォーム送信時の未入力チェック＆確認アラート
const contactForm = document.querySelector('form');
if (contactForm){
    contactForm.addEventListener('submit',(e) => {
        //各入力項目の値を取得する
        const name = document.getElementById('name').value;
        const companyName = document.getElementById('companyName').value;
        const email = document.getElementById('email').value;
        const age = document.getElementById('age').value;
        const message = document.getElementById('message').value;

        //未入力の項目があるかチェック
        if(name ===''|| companyName ===''|| email ===''||age ===''||message ===''){
            alert('必須項目が未入力です。入力内容をご確認ください。');
            e.preventDefault();//送信をキャンセル
        }else{
            //すべて入力されている場合確認ダイアログを表示する
            const result = confirm('以下の内容で送信します。よろしいですか？');

            //「キャンセル」が押された場合は送信をストップする
            if(!result){
                e.preventDefault();
            }
        }
    });
}

//フッターの背景色を４色で循環させるボタン
const tryButton = document.getElementById('try');
const footer = document.querySelector('footer');

if(tryButton && footer){
    //４色の配列
const colors = ['blue','red','yellow','gray'];
let currentIndex =0;

tryButton.addEventListener('click',()=>{
    //背景色を変更
    footer.style.backgroundColor = colors[currentIndex];

    //次の色へ進む循環処理
    currentIndex = (currentIndex +1)% colors.length;
});
}