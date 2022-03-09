      //Faq

      //using selectors inside the element
      const questions = document.querySelectorAll(".question");

      questions.forEach(function (question) {
        const btn = question.querySelector(".question-btn");
        // console.log(btn);

        btn.addEventListener("click", function () {
          // console.log(question);

          questions.forEach(function (item) {
            if (item !== question) {
              item.classList.remove("Show-text");
            }
          });

          question.classList.toggle("Show-text");
        });
      });


 // Bookmarks Color toggle
const toggleBtns = document.querySelectorAll('.toggle-box');
toggleBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    btn.classList.toggle('toggle-pressed');
  });
})

//Input Tag
const ul = document.querySelector(".inputTagContent ul"),
input = document.querySelector(".inputTagContent input"),
tagNumb = document.querySelector(".details span");

// let maxTags = 10,
tags = ["HTML", "CSS"];

countTags();
createTag();

function countTags(){
    input.focus();
    // tagNumb.innerText = maxTags - tags.length;
}
 
function createTag(){
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag =>{
        let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
        ul.insertAdjacentHTML("afterbegin", liTag);
    });
    countTags();
}

function remove(element, tag){
    let index  = tags.indexOf(tag);
    tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
    element.parentElement.remove();
    countTags();
}

function addTag(e){
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' ');
        if(tag.length > 1 && !tags.includes(tag)){
            if(tags.length < 10){
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag();
                });
            }
        }
        e.target.value = "";
    }
}

input.addEventListener("keyup", addTag);
