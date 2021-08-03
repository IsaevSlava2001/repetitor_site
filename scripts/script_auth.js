    let elem = document.getElementById('role_id');
    function output_textarea()
    {
        if(elem.value==1||elem.value==2)
        {
            document.getElementById('textar').innerHTML='Введите описание<textarea name="description" id="" cols="30" rows="10"></textarea>';
        }
        else
        {
            document.getElementById('textar').innerHTML='';
        }
    }