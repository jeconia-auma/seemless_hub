var email = document.getElementById('email');
// let submitor = document.getElementById('submitor');

var newsLetterData = new FormData();

newsLetterData.append('email', email);

newsLetter.addEventListener('submit', (e)=>{
    e.preventDefault();
    alert(email);
    console.log(email);
    // let xmlhttp = new XMLHttpRequest();

    // xmlhttp.onreadystatechange = function(){
    //     if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
    //         let mate = xmlhttp.responseText;
    //         alert(mate);
    //     }
    // }

    // xmlhttp.open('post', 'subscribe.php', true);

    // xmlhttp.send(newsLetterData);
});
