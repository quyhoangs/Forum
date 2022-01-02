<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 /*
  TODO: actually happens inside

        select * from Reply a
        left join user b ON a.user_id=b.id 
        where user_id = 

    public function author(){
    return $this->belongsTo(User::class,'user_id');
     //laravel hiểu tên funcion sẻ là khóa trong bảng vd:author_id,trong trường hợp khi muốn đổi tên function cho clean thì ta sẻ thêm 1 tham số sau nữa là user_id để nó ghi đè lên
  }
  */
class Reply extends Model
{
    public function owner(){
        return $this->belongsTo(User::class,'user_id') ;
    }
}
