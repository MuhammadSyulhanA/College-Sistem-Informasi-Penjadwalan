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
    
    // ini fungsinya biar diallow buat nambahin di kolom-kolom ini
    // namanya mass assigment, buat ngamanin data dari luar, liat dokumetasi
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    // ada dua, bisa $guarded juga, fungsinya kebalikan yg diatas
}
