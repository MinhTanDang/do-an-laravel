<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Requests\CapNhatLinhVucRequest;
    use App\Http\Requests\ThemMoiLinhVucRequest;

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

        public function store(ThemMoiLinhVucRequest $request){
            $tenLinhVuc = $request->ten_linh_vuc;
            $linhVuc = new LinhVuc;
            $linhVuc->ten_linh_vuc = $tenLinhVuc;
            $linhVuc->save();
            $msg = "Thêm mới lĩnh vực thành công";
            return view('linh-vuc.form', compact('msg'));
        }

        public function edit($id){
            $linhVuc = LinhVuc::find($id);
            return view('linh-vuc.form', compact('linhVuc'));
        }

        public function update(CapNhatLinhVucRequest $request, $id){
            $tenLinhVuc = $request->ten_linh_vuc;
            $linhVuc = LinhVuc::find($id);
            $linhVuc->ten_linh_vuc = $tenLinhVuc;
            $linhVuc->save();
            $msg = "Cập nhật lĩnh vực thành công";
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
            return redirect()->route('linh-vuc.thung-rac');
        }
    }
?>