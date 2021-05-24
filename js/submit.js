const sendBtn = document.querySelector('.send-btn button');


sendBtn.onclick = (e) => {
  e.preventDefault(); //디폴트로 잡힌 함수 이벤트를 막아주는 기능
  //사용자에게 내용이 적히지 않은 input 구간을 alert 창으로 알려주는 로직
  if(!document.form_data.name.value){
    alert("이름을 입력해 주세요.");
    document.form_data.name.focus();
    return;
  }

  if(!document.form_data.email.value){
    alert("이메일을 입력해 주세요.");
    document.form_data.email.focus();
    return;
  }

  if(!document.form_data.subject.value){
    alert("제목을 입력해 주세요.");
    document.form_data.subject.focus();
    return;
  }

  if(!document.form_data.message.value){
    alert("내용을 입력해 주세요.");
    document.form_data.message.focus();
    return;
  }
  
  document.form_data.submit(); //리턴문을 전부 실행한 뒤 form 태그에 적힌 경로의 데이터베이스로 넘김


}