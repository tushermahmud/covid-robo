const msg = document.querySelector(".msg");
const guess = document.querySelector("input");
const btn = document.querySelector(".btn");

let swords = ['python', 'javascript','c++', 'php', 'laravel', 'java', ,'c#', 'django', 'html', 'css','reactjs', 'angular', 'swift', 'android','sql','love', 'hate', 'girlfriend', 'boyfriend', 'emotion','increase', 'decrease']

const createNewWords = () =>{
    let ranNum = Math.floor(Math.random() * swords.length);
    console.log(ranNum);
    let newTemSwords = swords[ranNum];
    console.log(newTemSwords);
    return newTemSwords;
}

const scrambleWords = (arr) =>{
    for (let i = arr.length-1; i >0 ; i--) {
        let temp = arr[i];
        console.log(temp);
        let j = Math.floor(Math.random() *(i+1));
        console.log(i);
        console.log(j);

        arr[i] = arr[j];
        arr[j] = temp;
        
    }
    return arr;
}

let play = false;
let newWords = "";
let randWords = "";
btn.addEventListener("click", function () {
  
  if (!play) {
    play = true;
    btn.innerHTML = "Guess";
    guess.classList.toggle("hidden");
    newWords = createNewWords()
    randWords = scrambleWords(newWords.split("")).join("");
    //console.log(randWords);
    msg.innerHTML = `Guess the word!  <h1> ${randWords} </h1>`;
  }
  else{
      let tempWord = guess.value;
      if(tempWord === newWords){
            play = false;
            msg.innerHTML = `<p>Congratulation! It's Correct. It is</p> <h2> ${newWords} </h2>`;
            btn.innerHTML = "Start Again";
            guess.classList.toggle("hidden");
            guess.value = "";
      }
      else{
        msg.innerHTML = `Sorry Mr.! It's not Correct.Plz try again <h1> ${randWords} </h1>`;
        guess.value = "";
      }
  }
});
