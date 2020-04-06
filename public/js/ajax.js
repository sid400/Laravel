class Comments {
    constructor() {
        this.id_news = 0;
    }

    getIdNews() {
        let el = document.getElementById('id_news');
        let id = Number(el.innerText);
        return id;
    }

    getCommentsByIdNews(id) {
        axios.get('/comment/' + id).then(function (response) {
            C.renderComments(response);
        });
    }

    renderComments(response) {
        let comments = document.querySelector('.comments');
        response.data.forEach(element => {
            let insert = C.templater(element.content,element.id);
            comments.insertAdjacentHTML("afterbegin", insert)
        });
    }

    templater(content,id){
        let tmpl = '<div class="NewsCard">' +
            '<p class="text">' + content + ' </p>' +
            '<a href="/comment/ajax/delete/ ' + id + '" class="btn btn-danger m-1">Удалить</a>' +
            '<a href="/comment/ajax/update/' + id + '"  class="btn btn-secondary m-1">Редактировать</a>' +
            '</div>';
        return tmpl
    }
}

let C = new Comments();


