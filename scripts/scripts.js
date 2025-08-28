$(document).ready(function () {
    userData();
    $('body').on('submit', 'form', function (e) {
        e.preventDefault();
        let userdata = $('#user-data');
        console.log("Inside the sumbit", $(this).serialize());
        $.ajax({
            type: 'POST',
            url: './database/store.php',
            data: $(this).serialize(),
            success: function (response) {
                if (response.error) {
                    console.log("Error:", response.error);
                    return;
                }
                userdata.append(`
                 <tr>
                 <td>${response.id}</td>
                 <td>${response.first_name}</td>
                 <td>${response.last_name}</td>
                 <td>${response.mobile_no}</td>
                 <td>${response.email}</td>
                 <td>
                  <button class="edit-btn btn btn-sm btn-warning" data-id="${response.id}">Edit</button>
                  <button class="delete-btn btn btn-sm btn-danger"  data-id="${response.id}">Delete</button>
                 </td>
                 </tr> 
                `)
                console.log("Inside the success response", response);
            }
        })
    })

    $("body").on('click','.delete-btn',function(){
      console.log("Inside the delete btn ");
      let id=$(this).data('id');
      let row=$(this).closest('tr');
      console.log("id is ",id);
      $.ajax({
        type:'GET',
        url:'./database/delete.php',
        data:{id:id},
        success:function(response){
         console.log("response is ",response);
         if(response.trim()==='success'){
            row.remove();
         }
         else{
            alert("Deleted failed"+response);
         }
        }
      })
      
    })
    $("body").on('click','.edit-btn',function(){
        
    })

    function userData() {
        let userdata = $('#user-data');
        console.log("length",userData.length);
        userdata.empty();
        $.ajax({
            type: 'GET',
            url: './database/fetch.php',
            dataType: 'json',
            success: function (response) {
                console.log("response is ", response.length);
                if (response.length > 0) {
                    response.forEach((user, index) => {
                        console.log("Inside the loop", user.first_name);
                        userdata.append(`
                            <tr>
                                <td>${index + 1}</td>
                                <td>${user.first_name}</td>
                                <td>${user.last_name}</td>
                                <td>${user.mobile_no}</td>
                                <td>${user.email}</td>
                                <td>
                                    <button class="edit-btn btn btn-sm btn-warning" data-id="${user.id}">Edit</button>
                                    <button class="delete-btn btn btn-sm btn-danger"  data-id="${user.id}">Delete</button>
                                </td>
                            </tr>
                        `);
                    });
                } else {
                    userdata.append(`
                        <tr>
                            <td colspan="5" style="text-align:center;">No users found</td>
                        </tr>
                    `);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", error);
            }
        });
    }

});