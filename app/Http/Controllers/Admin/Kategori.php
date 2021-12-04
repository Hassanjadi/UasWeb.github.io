<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Kategori_model;
class Kategori extends Controller
{
    // Index Main Page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$kategori 	= DB::table('kategori')->orderBy('urutan','ASC')->get();

		$data = array(  'title'     => 'Kategori Berita',
                        'kategori'	=> $kategori,
              
                        'content'   => 'admin/kategori/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    
    // Main page Detail
    public function detail($id_kategori)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mykategori        = new Kategori_model();
        $kategori         = $mykategori->detail($id_kategori);

        $data = array(  'title'             => $kategori->$nama_kategori,
                        'kategori'             => $kategori,
                       
                        'content'           => 'admin/kategori/detail'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mykategori          = new Kategori_model();
        $keywords           = $request->keywords;
        $kategori             = $mystaff->cari($keywords);
        $kategori = DB::table('kategori')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Kategori Berita',
                        'kategori'            => $kategori,
                      
                        'content'           => 'admin/kategori/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori' => 'required|unique:kategori',
					        'urutan' 		=> 'required',
					        ]);
    	$slug_kategori = Str::slug($request->nama_kategori, '-');
        DB::table('kategori')->insert([
            'id_user'       => Session()->get('id_user'),
            'nama_kategori' => $request->nama_kategori,
            'slug_kategori'	=> $slug_kategori,
            'urutan'   		=> $request->urutan
        ]);
        return redirect('admin/kategori')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori' => 'required',
					        'urutan' 		=> 'required',
					        ]);
    	$slug_kategori = Str::slug($request->nama_kategori, '-');
        DB::table('kategori')->where('id_kategori',$request->id_kategori)->update([
            'id_user'       => Session()->get('id_user'),
            'nama_kategori' => $request->nama_kategori,
            'slug_kategori'	=> $slug_kategori,
            'urutan'   		=> $request->urutan
        ]);
        return redirect('admin/kategori')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id_kategori)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	DB::table('kategori')->where('id_kategori',$id_kategori)->delete();
    	return redirect('admin/kategori')->with(['sukses' => 'Data telah dihapus']);
    }
}
