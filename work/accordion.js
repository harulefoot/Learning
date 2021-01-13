console.log('Hello, World!');

(() => {
    const $elm = document.querySelector('#js-accordion');
    const $trigger = $elm.getElementsByTagName('a');

    // トリガーの数を取得
    const triggerLen = $trigger.length;
    let index = 0;

    while(index < triggerLen){
        $trigger[index].addEventListener('click', (e)=>clickHandler(e));
        index++;
    }

    // クリックしたら実行される処理
    const clickHandler = (e) =>{
        e.preventDefault(); // リンクを殺す

        const $target = e.currentTarget;
        const $content = $target.nextElementSibling;
        if($content.style.display==='block'){
            $content.style.display = 'none';
        } else {
            $content.style.display = 'block';
        }
    };
})();