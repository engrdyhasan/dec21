var absent = document.getElementById('abruptly'),
    absentminded = document.getElementById('abrupt');
console.log(absent.contains(absentminded));
if (absent.contains(absentminded)) {
  // console.log('absentminded');
  absentminded.textContent = 'Are you telling me the absolute truth';
}