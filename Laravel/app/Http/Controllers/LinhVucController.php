<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\LinhVuc;

    class LinhVucController extends Controller
    {
        
        public function index(){
            $linhVucs = LinhVuc::all();
            return view('linh-vuc.danh-sach', compact('linhVucs'));
        }

        public function create(){
            return view('linh-vuc.form');
        }

        public function store(Request $request){
            $tenLinhVuc = $request->ten_linh_vuc;
            $flag = LinhVuc::withTrashed()->where('ten_linh_vuc', $tenLinhVuc)->doesntExist();
            //
            if($flag){
                $linhVuc = new LinhVuc;
                $linhVuc->ten_linh_vuc = $tenLinhVuc;
                $linhVuc->save(); 
            }
            return view('linh-vuc.form');
        }

        public function edit($id){
            $linhVuc = LinhVuc::find($id);
            return view('linh-vuc.form', compact('linhVuc'));
        }

        public function update(Request $request, $id){
            $tenLinhVuc = $request->ten_linh_vuc;
            $linhVuc = LinhVuc::find($id);
            $flag = LinhVuc::where('ten_linh_vuc', $tenLinhVuc)->doesntExist();
            //
            if($flag){
                $linhVuc->ten_linh_vuc = $tenLinhVuc;
                $linhVuc->save();
            }
            return redirect()->route('linh-vuc.danh-sach');
        }

        public function destroy($id){
            $linhVuc = LinhVuc::find($id);
            $linhVuc->delete();
            return redirect()->route('linh-vuc.danh-sach');
        }
        //
        public function onlyTrashed(){
            $onlyTrasheds = LinhVuc::onlyTrashed()->get();
            return view('linh-vuc.danh-sach', compact('onlyTrasheds'));
        }

        public function restore($id){
            $linhVuc = LinhVuc::onlyTrashed()->find($id);
            $linhVuc->restore();
            return redirect()->route('linh-vuc.thung-rac');
        }

        public function delete($id){
            $linhVuc = LinhVuc::onlyTrashed()->find($id);
            $linhVuc->forceDelete();
            //$linhVuc->truncate();
            return redirect()->route('linh-vuc.thung-rac');
        }
    }
?>