let answers = [
  'Carp fish and catfish are profitable fishes',
  'Rohu fish breeds are cheap and inexpensive',
  'Quality of fish can be checked by sniffing the fish and checking the eyes',
  'Check quality metal and molded plastic'
]
//variables
const replyBox = document.querySelector('.reply');
const questionSubmit = document.querySelector('.question');
const noAnswer = "I'm sorry, I don't understand your question";
const bgColour = document.getElementById('bg-colour');
const textColour = document.getElementById('text-colour');


function showResponse(){
 if(questionSubmit.value.includes('profitable')){
   replyBox.textContent = answers[0];
 } else if(questionSubmit.value.includes('requirements') || questionSubmit.value.includes('entry requirements')){
   replyBox.textContent = answers[1];
 } else if(questionSubmit.value.includes('quality') && questionSubmit.value.includes('fish')){
   replyBox.textContent = answers[2];
 }else if(questionSubmit.value.includes('quality') && questionSubmit.value.includes('tools')){
   replyBox.textContent = answers[3];
 } 
 else{
   replyBox.textContent = noAnswer;
 }
  questionSubmit.value = '';
}

questionSubmit.addEventListener('keypress', (e) => {
  if(e.keyCode == 13){
    showResponse();
  } else{
    return
  }
})

function changeBg(){
  replyBox.style.backgroundColor = bgColour.value;
}

function changeText(){
  replyBox.style.color = textColour.value;
}

bgColour.addEventListener('change', changeBg);
textColour.addEventListener('change', changeText);