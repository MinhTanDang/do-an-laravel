<?php
    namespace App\Http\Controllers;
    use RealRashid\SweetAlert\Facades\Alert;
    use Illuminate\Http\Request;
    use App\Http\Requests\ThemMoiCauHoiRequest;
    use App\Http\Requests\CapNhatCauHoiRequest;
    use App\CauHoi;
    use App\LinhVuc;

    class CauHoiController extends Controller
    {
        public function index(){
            $linhVucs = LinhVuc::all();
            $cauHois = CauHoi::whereIn('linh_vuc_id', $linhVucs->modelKeys())->get();
            return view('cau-hoi.danh-sach', compact('cauHois'));
        }

        public function create(){
            $linhVucs = LinhVuc::all();
            return view('cau-hoi.form', compact('linhVucs'));
        }

        public function store(ThemMoiCauHoiRequest $request){
            $linhVucs = LinhVuc::all();
            $tenLinhVuc = $request->ten_linh_vuc;
            $noiDung = $request->noi_dung;
            $linhVuc = $request->linh_vuc;
            $phuongAnA = $request->phuong_an_a;
            $phuongAnB = $request->phuong_an_b;
            $phuongAnC = $request->phuong_an_c;
            $phuongAnD = $request->phuong_an_d;
            $dapAn = $request->dap_an;
            $cauHoi = new CauHoi;
            $cauHoi->noi_dung = $noiDung;
            $cauHoi->linh_vuc_id = $linhVuc;
            $cauHoi->phuong_an_a = $phuongAnA;
            $cauHoi->phuong_an_b = $phuongAnB;
            $cauHoi->phuong_an_c = $phuongAnC;
            $cauHoi->phuong_an_d = $phuongAnD;
            $cauHoi->dap_an = $dapAn;
            $cauHoi->save();
            $msg = "Thêm mới câu hỏi thành công";
            return view('cau-hoi.form', compact('linhVucs', 'msg'));
        }

        public function edit($id){
            $linhVucs = LinhVuc::all();
            $cauHoi = CauHoi::find($id);
            return view('cau-hoi.form', compact('cauHoi', 'linhVucs'));
        }

        public function update(CapNhatCauHoiRequest $request, $id){
            $linhVucs = LinhVuc::all();
            $noiDung = $request->noi_dung;
            $linhVuc = $request->linh_vuc;
            $phuongAnA = $request->phuong_an_a;
            $phuongAnB = $request->phuong_an_b;
            $phuongAnC = $request->phuong_an_c;
            $phuongAnD = $request->phuong_an_d;
            $dapAn = $request->dap_an;
            $cauHoi = CauHoi::find($id);
            $cauHoi->noi_dung = $noiDung;
            $cauHoi->linh_vuc_id = $linhVuc;
            $cauHoi->phuong_an_a = $phuongAnA;
            $cauHoi->phuong_an_b = $phuongAnB;
            $cauHoi->phuong_an_c = $phuongAnC;
            $cauHoi->phuong_an_d = $phuongAnD;
            $cauHoi->dap_an = $dapAn;
            $cauHoi->save();
            $msg = "Cập nhật câu hỏi thành công";
            return view('cau-hoi.form', compact('linhVucs', 'msg'));
        }
        //
        public function destroy($id){
            $cauHoi = CauHoi::find($id);
            $cauHoi->delete();
            return redirect()->route('cau-hoi.danh-sach');
        }

        public function onlyTrashed(){
            $onlyTrasheds = CauHoi::onlyTrashed()->get();
            return view('cau-hoi.danh-sach', compact('onlyTrasheds'));
        }

        public function restore($id){
            $cauHoi = CauHoi::onlyTrashed()->find($id);
            $cauHoi->restore();
            return redirect()->route('cau-hoi.thung-rac');
        }

        public function delete($id){
            $cauHoi = CauHoi::onlyTrashed()->find($id);
            $cauHoi->forceDelete();
            //$cauHoi->truncate();
            return redirect()->route('cau-hoi.thung-rac');
        }
    }
?>
