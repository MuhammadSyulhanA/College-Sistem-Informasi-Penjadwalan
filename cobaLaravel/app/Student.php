<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*modelnya udah otomatis kehubung sama tabel students,
karna nama modelnya sama kek tabel cuma kurangi huruf s
*/
class Student extends Model
{
    //

    /*misal kita punya tabel namanya mahasiswa bukan students,
    harus dbikin kek dibawah ini
    */
    // protected $table = 'mahasiswa';
}
