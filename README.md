# Tổng quan
- Tên đề tài : Ứng dụng Blockchain trong truy xuất nguồn gốc chuỗi cung ứng (Rau củ quả)
- Hoạch định nguồn lực doanh nghiệp - IS336.M11.HTCL
- Giảng viên hướng dẫn: Ths. Đỗ Duy Thanh
- Nhóm sinh viên thực hiện :
    + Huỳnh Văn Pháp - MSSV: 19521987 (Nhóm trưởng, Code triển khai ứng dụng)
    + Nguyễn Thùy Linh - MSSV: 19521758 (Code triển khai ứng dụng)
    + Hoàng Công Toán - MSSV: 19522359 (Slide, Báo cáo)
    + Võ Xuân Thịnh - MSSV: 19522290 (Slide, Báo cáo)
# Thiết kế hệ thống
### Usecase diagram
![](./Database/usecase.jpg)
### Sequence diagram farmer
![](./Database/seq_famer.jpg)
### Sequence diagram buyer
![](./Database/seq_buy.jpg)
### Sequence diagram transporter
![](./Database/seq_tran.jpg)
### Sequence diagram packager
![](./Database/seq_pack.jpg)
### Sequence diagram distributor
![](./Database/seq_dis.jpg)
### Sequence diagram retailer
![](./Database/seq_ret.jpg)
### Sequence diagram for raft consensus
![](./Database/seq_raft.jpg)
### Sequence diagram consumer access 
![](./Database/seq_con.jpg)
### Class diagram
![](./Database/class_dia.jpg)


# Cơ sở dữ liệu
![](./Database/csdl.jpg)

# Triển khai smart contract trên Remix Ethereum
## Import account Ganache vào ví Metamask
### Mở Ganache, chọn Quickstart, sau đó copy RPC Server
![](./Database/ganache.jpg)
### Mở ví Metamask, vào phần Setting -> Networks
![](./Database/metamask.jpg)
### Tiến hành điền RPC Server của Ganache,chain ID và tên Network(Tùy ý) sau đó lưu lại. Vậy là chúng ta đã kết nối được Ganache với Metamask
![](./Database/metamask_1.jpg)
### Tiến hành Import account Ganache vào Metamask chọn Import accout
![](./Database/metamask_2.jpg)
### Vào Ganache, lấy ngẫu nhiên 1 trong 10 accout đã được Ganache cho sẵn, sau đó lấy Private Key
![](./Database/ganache_1.jpg)
### Dán vào phần Past your private key string here:
![](./Database/metamask_3.jpg)
### Như vậy, ví của chúng ta đã có 100ETH dùng nội bộ
![](./Database/metamask_4.jpg)
## Deploy trên môi trường ảo Testnet: Remix
### Vào trang https://remix.ethereum.org/
![](./Database/smart.jpg)
### Tạo smart contract của dự án chúng ta trên remix
![](./Database/smart_1.jpg)
### Nhấn vào biểu tượng như hình, sau đó chọn compile để kiểm tra lỗi của contract
![](./Database/smart_2.jpg)
### Compile thành công, nhấp vào biểu tượng như hình để Deploy và chạy Transactions
![](./Database/smart_3.jpg)
### Ở phần Environment, chọn Injected web3 để kết nối với ví Metamask
![](./Database/smart_4.jpg)
### Sau khi kết nối thành công, tiếp tục chọn Deploy để Confirm giao dịch
![](./Database/smart_5.jpg)
### Copy địa chỉ hợp đồng và account
![](./Database/smart_6.jpg)
### Vào project trên Visual studio code, đến file app.js sau đó xóa và past để thay đổi địa chỉ hợp đồng rồi lưu lại
![](./Database/smart_7.jpg)
### Vào file user.json để thay đổi lại Account mới rồi lưu lại
![](./Database/smart_8.jpg)
### Dùng XAMPP để chạy giao diện người dùng. Nhập Tên đăng nhập và mật khẩu được thiết kế trong Cơ sở dữ liệu để tiến hành đăng nhập
![](./Database/smart_9.jpg)
### Tiến hành kiểm tra thử các chức năng. Vậy là đã thành công.
![](./Database/smart_10.jpg)
### Đồng thời, Account Ganache cũng mất đi một lượng ETH để thực hiện giao dịch trên
![](./Database/smart_11.jpg)
