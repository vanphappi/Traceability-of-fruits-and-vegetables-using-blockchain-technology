pragma solidity >=0.4.22 <0.9.0; 

contract quanlytruyxuat{
    event Added(uint256 index);

    struct addnongdan{
        address taikhoan;
        string noisanxuat;
        string ngaygieotrong;
        string ngaythuhoach;
        string cacloaithuocsudung;
    }

    struct addvanchuyen{
        address taikhoan;
        string noidi;
        string noiden;
    }

    struct addnhabanle{
        address taikhoan;
        string diachi;
        string ngaynhap;
        string cachbaoquan;
    }

    struct sanpham{
        address tknguoitao;
        uint id;
        string tensp;
        string ngaytao;
        string mota;
        string diachi;

        addnongdan nongdan;
        addvanchuyen vanchuyen;
        addnhabanle nhabanle;
    }

    mapping(uint => sanpham) danhsachsp;
    uint nextid=0;

    function themsanpham(string memory tensp, string memory date, string memory mota, string memory diachi) public returns(bool){
        sanpham memory newsp;
        newsp.tknguoitao=msg.sender;
        newsp.tensp=tensp;
        newsp.ngaytao=date;
        newsp.mota=mota;
        newsp.diachi=diachi;
        newsp.id=nextid;
        danhsachsp[nextid]=newsp;
        nextid++;
        emit Added(nextid-1);
        return true;
    }

    function thongtinnongdan(uint id, string memory noisanxuat,string memory ngaygieotrong, string memory ngaythuhoach,string memory cacloaithuocsudung) public returns (bool) {
        require(id<=nextid);
        addnongdan memory newnongdan;
        newnongdan.taikhoan=msg.sender;
        newnongdan.noisanxuat=noisanxuat;
        newnongdan.ngaygieotrong=ngaygieotrong;
        newnongdan.ngaythuhoach=ngaythuhoach;
        newnongdan.cacloaithuocsudung=cacloaithuocsudung;
        danhsachsp[id].nongdan=newnongdan;
        return true;
    }

    function thongtinvanchuyen(uint id, string memory noidi,string memory noiden) public returns (bool) {
        require(id<=nextid);
        addvanchuyen memory newvanchuyen;
        newvanchuyen.taikhoan=msg.sender;
        newvanchuyen.noidi=noidi;
        newvanchuyen.noiden=noiden;
        danhsachsp[id].vanchuyen=newvanchuyen;
        return true;
    }

    function thongtinnhabanle(uint id, string memory diachi,string memory ngaynhap,string memory cachbaoquan) public returns (bool) {
        require(id<=nextid);
        addnhabanle memory newnhabanle;
        newnhabanle.taikhoan=msg.sender;
        newnhabanle.diachi=diachi;
        newnhabanle.ngaynhap=ngaynhap;
        newnhabanle.cachbaoquan=cachbaoquan;
        danhsachsp[id].nhabanle=newnhabanle;
        return true;
    }

    function concat(string memory _a, string memory _b) public returns (string memory){
        bytes memory bytes_a = bytes(_a);
        bytes memory bytes_b = bytes(_b);
        string memory length_ab = new string(bytes_a.length + bytes_b.length);
        bytes memory bytes_c = bytes(length_ab);
        uint k = 0;
        for (uint i = 0; i < bytes_a.length; i++) bytes_c[k++] = bytes_a[i];
        for (uint i = 0; i < bytes_b.length; i++) bytes_c[k++] = bytes_b[i];
        return string(bytes_c);
    }

    function truyxuatnhaphanphoi(uint id) public returns (string memory) {
        require(id<=nextid);
        string memory output;
        output=concat(output,danhsachsp[id].tensp);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].ngaytao);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].mota);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].diachi);
        return output;
    }

    function truyxuatnongdan(uint id) public returns (string memory) {
        require(id<=nextid);
        string memory output;
        output=concat(output,danhsachsp[id].nongdan.noisanxuat);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].nongdan.ngaygieotrong);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].nongdan.ngaythuhoach);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].nongdan.cacloaithuocsudung);
        return output;
    }

    function truyxuatvanchuyen(uint id) public returns (string memory) {
        require(id<=nextid);
        string memory output;
        output=concat(output,danhsachsp[id].vanchuyen.noidi);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].vanchuyen.noiden);
        return output;
    }

    function truyxuatnhabanle(uint id) public returns (string memory) {
        require(id<=nextid);
        string memory output;
        output=concat(output,danhsachsp[id].nhabanle.diachi);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].nhabanle.ngaynhap);
        output=concat(output,",");
        output=concat(output,danhsachsp[id].nhabanle.cachbaoquan);
        return output;
    }
}