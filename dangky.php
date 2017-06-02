<?php include 'general/header.php';?>
<div id="maincontent">
    <div id="maincontent-section1">
    <div class="listbox listbox-main news-box">
       <h1 style="text-align: center; color: red">Chào mừng quý vị và các bạn sinh viên đến với Ký túc xá
            thuộc trường Đại học Kỹ Thuật - Công Nghệ TP.Cần Thơ</h1>
            <form method="post">
               <fieldset>
                   <legend>Thông Tin Nhập</legend>
                        <p>
                           <label style="margin-left: 100px;">Mã Sinh Viên :</label>
                           <span><input type="text" name="ma_sinh_vien" id="ma_sinh_vien" size="20" maxlength="8" value="" style="margin-left: 10px;"></span>
                        </p>
                        <p>
                           <label style="margin-left: 152px;">Email :</label>
                           <span><input type="text" name="ma_sinh_vien" id="ma_sinh_vien" size="20" maxlength="8" value="" style="margin-left: 10px;"></span>
                        </p>
                        <p>
                           <label style="margin-left: 83px;">Xác Nhận Email :</label>
                           <span><input type="text" name="ma_sinh_vien" id="ma_sinh_vien" size="20" maxlength="8" value="" style="margin-left: 10px;"></span>
                        </p>
                          <p>
						      <td width="105" align="right">&nbsp;</td>
						      <td>
						      </td>
						    </p>
                          <p>
    	                   <label style="margin-left: 20px;margin-bottom: 10px;">
               	              <input type="radio" name="loaidangky" id="loaidangky" value="ZGFuZ2t5bW9p" checked="checked" style="margin-left: 100px;"> &nbsp; Diện đăng ký mới hoàn toàn <br>
                           </lable>
                         </p>
                   <table align="center" width = "100%" cellspacing="0px" style="border: 1px solid black;margin-top:10px;" cellpadding="3px;">
                      <tbody>
                         <tr>
                           <td>
                             <p style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:blue; margin-top: 10px; margin-left: 10px;"><strong>Những lưu ý cần biết khi thực hiện  đăng ký lưu trú qua mạng</strong>:</p>
                             <ol start="1" type="1">
                             <li style="margin-bottom: 10px;">Sinh viên phải nhập thông tin đầy đủ, chính xác theo yêu cầu và phải chịu trách nhiệm trước thông tin do mình nhập vào, sau khi đăng ký thành công, những sinh viên có thông tin không chính xác mặc nhiên  sẽ mất quyền ưu tiên được xét. 
                            </li>
                             <li style="margin-bottom: 10px;">Thông tin sinh viên gửi đến đăng ký đặt chỗ nhằm làm cơ sở cho hội đồng xét chọn lưu trú tham khảo ban đầu, những thông tin này  không có giá trị thay thế cho hồ sơ lưu trú.</li>
                             <li style="margin-bottom: 10px;">Việc đăng ký qua mạng  được thực hiện cho  sinh viên đang thuê chỗ ở và sinh viên chưa thuê chỗ ở tại KTXBK, sinh viên check vào ô tương ứng để đăng ký. Việc đăng ký mới chỉ được thực hiện  cho những sinh viên chưa được thuê chỗ ở và chỉ được đăng ký một lần cho một mã số sinh viên trong một học kỳ của một năm học, vì vậy những sinh viên đang lưu trú tại  KTX, đương nhiên sẽ không đăng ký mới được. </li>
                             <li style="margin-bottom: 10px;">Danh sách sinh viên được xét  lưu trú tại ký túc xá sẽ được thông báo trên  Web Site KTX, Sinh viên theo dõi các thông báo tại khoa – Phòng – Ban – Trung tâm hoặc  trên Web Site KTX để biết thêm chi tiết. &nbsp;</li>
                             <li style="margin-bottom: 10px;">Nếu có thông tin sai sót cần sửa đổi hoặc thắc mắc xin vui lòng liên hệ trực tiếp theo địa chỉ: </li>
		                     </ol>
		
                              <p style="margin-left: 20px;"><b>Ký túc xá Bách Khoa</b><br><b>Địa chỉ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 497  Hòa Hảo, P7, Q10, Tp Hồ Chí Minh</b><br><b>Điện thoại&nbsp;&nbsp;: &nbsp;08.39573946</b><br><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <a href="mailto:ktx@hcmut.edu.vn">ktx@hcmut.edu.vn</a></b></p>		
		                   </td>
                         </tr>
                      </tbody>
                   </table>
                   <table align="center" width="80%">
				    <tbody><tr>
				        <td align="left">
				        <input style="margin-top: 20px;" id="confirm_thongbao" name="confirm_thongbao" type="checkbox" value="1"> 
				        Tôi đã đọc và đồng ý các qui định trên, chọn tiếp tục đăng ký.
				        </td>
				    </tr>
				    <tr>
				   	  <td align="center">
				       	<input style="margin-top: 10px; padding: 8px;border-radius:5px;" type="submit" class="button" id="button" value="Đăng ký" onclick="return checkValidate();">
				   	  </td>
				    </tr>
				    </tbody></table>
               </fieldset>
            </form>
     </div>   
        <?php include 'general/slider.php';?>
        <?php include 'general/footer.php';?>