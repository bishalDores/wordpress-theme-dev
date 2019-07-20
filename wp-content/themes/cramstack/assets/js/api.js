
    const get = (url) =>  {
        return $.ajax({
            url: url,
            dataType: 'json',
            type: 'get',
            contentType: 'application/json',
        });
    }
   const  post = (url, data) => {
        return $.ajax({
            url: url,
            dataType: 'json',
            type: 'post',
            contentType: 'application/json',
            data: JSON.stringify(data)
        })
    }

   const update = (url, id, data) => {
        return $.ajax({
            url: url,
            dataType: 'json',
            type: 'put',
            contentType: 'application/json',
            data: JSON.stringify(data),
        });
    };
    const delete_api = (id) => {
        return $.ajax({
            url: url,
            dataType: 'json',
            type: 'delete',
            contentType: 'application/json',
        });
    }