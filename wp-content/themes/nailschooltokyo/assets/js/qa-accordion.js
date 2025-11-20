document.addEventListener('DOMContentLoaded', function() {
    const qaQuestions = document.querySelectorAll('.qa-question');
    
    qaQuestions.forEach(function(question) {
        question.addEventListener('click', function() {
            const qaItem = this.parentElement;
            const qaAnswer = qaItem.querySelector('.qa-answer');
            const qaArrow = this.querySelector('.qa-arrow');
            
            // 現在の項目を開閉
            if (qaItem.classList.contains('active')) {
                qaItem.classList.remove('active');
                qaAnswer.style.maxHeight = null;
                qaArrow.style.transform = 'rotate(0deg)';
            } else {
                qaItem.classList.add('active');
                qaAnswer.style.maxHeight = qaAnswer.scrollHeight + 'px';
                qaArrow.style.transform = 'rotate(180deg)';
            }
        });
    });
});

