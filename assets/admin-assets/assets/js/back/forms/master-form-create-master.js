function form_input(number, question, id, type, required) {
    let html =  '<div class="col-12 mb-0 pb-0">'+
                    '<div class="card bg-active mb-2">'+
                        '<div class="card-body pl-3 pr-2 pb-3 pt-3">'+    
                            '<div class="row p-0 m-0"><div class="col-1 p-0 m-0"><span class="badge badge-danger mr-2">'+number+'</span></div> <div class="col-11 p-0 m-0"><input type="text" id="'+id+'" name="'+id+'" class="form-control questions" placeholder="Tuliskan disini" value="'+question+'"></div></div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<input hidden id="type-'+id+'" value="'+type+'">'+
                '<input hidden id="required-'+id+'" value="'+required+'">'+
                '<div class="col-12 mt-0 ml-4 pt-0 pb-3 contents" id="content-'+number+'">'+
                    '<div class="row">'+
                        '<div class="col-11 ml-3">'+
                            '<div class="form-group">'+
                                '<input type="text" id="answer-'+id+'" name="answer-'+id+'" class="form-control" placeholder="Tuliskan disini">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'

    $('#set-form').append(html)
}

function form_radio(number, question, id, answers, type, required) {
    let html =  '<div class="col-12 mb-0 pb-0">'+
                    '<div class="card bg-active mb-2">'+
                        '<div class="card-body pl-3 pr-2 pb-3 pt-3">'+    
                            '<div class="row p-0 m-0"><div class="col-1 p-0 m-0"><span class="badge badge-danger mr-2">'+number+'</span></div> <div class="col-11 p-0 m-0"><input type="text" id="'+id+'" name="'+id+'" class="form-control questions" placeholder="Tuliskan disini" value="'+question+'"></div></div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<input hidden id="type-'+id+'" value="'+type+'">'+
                '<input hidden id="required-'+id+'" value="'+required+'">'+
                '<input hidden id="answers-'+id+'" value="'+(answers.join(","))+'">'
    
        html += '<div class="col-12 mt-0 ml-4 pt-0 pb-3">'+
                    '<div class="row">'

            let i = 0
            answers.forEach(answer => {
                html += '<div class="col-12 ml-4">'+
                            '<label class="form-radio-label">'+
                                '<input class="form-radio-input" type="radio" id="answer-'+id+'-'+i+'" name="answer-'+id+'" value="'+answer+'">'+
                                '<span class="form-radio-sign">'+answer+'</span>'+
                            '</label>'+
                        '</div>'
                i++
            })

        html +=     '</div>'+
                '</div>'

    $('#set-form').append(html)
}

function form_range(number, question, id, length, minimum, maximum, type, required) {
    let html =  '<div class="col-12 mb-0 pb-0">'+
                    '<div class="card bg-active mb-2">'+
                        '<div class="card-body pl-3 pr-2 pb-3 pt-3">'+    
                            '<div class="row p-0 m-0"><div class="col-1 p-0 m-0"><span class="badge badge-danger mr-2">'+number+'</span></div> <div class="col-11 p-0 m-0"><input type="text" id="'+id+'" name="'+id+'" class="form-control questions" placeholder="Tuliskan disini" value="'+question+'"></div></div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<input hidden id="type-'+id+'" value="'+type+'">'+
                '<input hidden id="required-'+id+'" value="'+required+'">'+
                '<input hidden id="length-'+id+'" value="'+length+'">'+
                '<input hidden id="minimum-'+id+'" value="'+minimum+'">'+
                '<input hidden id="maximum-'+id+'" value="'+maximum+'">'

        html += '<div class="col-12 mt-0 pt-0 pb-3">'+
                    '<div class="row justify-content-center">'+
                        '<div class="col-12 text-center">'+
                            '<div class="form-check-inline">'+
                                '<label class="form-radio-label">'+
                                    '<span class="form-radio-sign">'+minimum+'</span>'+
                                    '<input class="form-radio-input" style="width: 20px;" type="radio" id="answer-'+id+'-1" name="answer-'+id+'" value="1">'+
                                '</label>'+
                            '</div>'
                
            let width = '15px'
            let middle_width = '10px'
            if(length == 5) {
                for(let i=2; i <= 4; i++) {
                    html += '<div class="form-check-inline">'+
                                '<label class="form-radio-label">'+
                                    '<input class="form-radio-input" style="width: '+width+';" type="radio" id="answer-'+id+'-'+i+'" name="answer-'+id+'" value="'+i+'">'+
                                '</label>'+
                            '</div>'
                }
            }

        html +=             '<div class="form-check-inline">'+
                                '<label class="form-radio-label">'+
                                    '<input class="form-radio-input" style="width: 20px;" type="radio" id="answer-'+id+'-'+length+'" name="answer-'+id+'" value="'+length+'">'+
                                    '<span class="form-radio-sign">'+maximum+'</span>'+
                                '</label>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'

    $('#set-form').append(html)
}

function form_date(number, question, id, type, required) {
    let html =  '<div class="col-12 mb-0 pb-0">'+
                    '<div class="card bg-active mb-2">'+
                        '<div class="card-body pl-3 pr-2 pb-3 pt-3">'+    
                            '<div class="row p-0 m-0"><div class="col-1 p-0 m-0"><span class="badge badge-danger mr-2">'+number+'</span></div> <div class="col-11 p-0 m-0"><input type="text" id="'+id+'" name="'+id+'" class="form-control questions" placeholder="Tuliskan disini" value="'+question+'"></div></div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<input hidden id="type-'+id+'" value="'+type+'">'+
                '<input hidden id="required-'+id+'" value="'+required+'">'+
                '<div class="col-12 mt-0 ml-4 pt-0 pb-3">'+
                    '<div class="row">'+
                        '<div class="col-11 ml-3">'+
                            '<div class="form-group">'+
                                '<input type="text" id="answer-'+id+'" name="answer-'+id+'" placeholder="Pilih tanggal disini" value="" data-language="in" data-position="top left" class="datepicker-here form-control">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'

    $('#set-form').append(html)
}

function form_section(question, id, type, required) {
    let html =  '<div class="col-12 mt-4 mb-0 pb-0">'+
                    '<h4><strong>'+question+'</strong></h4>'+
                '</div>'+
                '<input hidden class="questions" id="'+id+'" name="'+id+'" value="'+question+'">'+
                '<input hidden id="type-'+id+'" value="'+type+'">'+
                '<input hidden id="required-'+id+'" value="'+required+'">'

    $('#set-form').append(html)
}