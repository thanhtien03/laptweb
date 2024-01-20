Duong Thanh Tien 22000214
Lop 22CTMDT01
De 3:

cau a3: Lấy ra danh sách khách hàng theo thứ tự tên theo Alphabet (Z->A), 
trong đó Tên khách hàng có chữ a hoặc bắt đầu bằng chữ m, trong đó Email phải là dịchvụcủaYahoo (example@yahoo.com). 
Thông tin hiển thị gồm: Mã khách hàng, Tênkhách hàng, Email.
	SELECT user_id, user_name, user_email FROM users WHERE (user_name LIKE '%a%' OR user_name LIKE 'm%') AND user_email LIKE '%@yahoo.com%' ORDER BY user_name DESC;
	
	
