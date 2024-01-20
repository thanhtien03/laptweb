Duong Thanh Tien 22000214
Lop 22CTMDT01
De 3:

cau b3: Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thôngtinhiển thị gồm: 
mã user, tên user, mã đơn hàng, tổng tiền. Mỗi user chỉ chọnra1đơnhàng có giá tiền lớn nhất.

	SELECT u.user_id, u.user_name, o.order_id, MAX(total_price) AS max_total_price
	FROM users u
	JOIN orders o ON u.user_id = o.user_id
	JOIN (
		SELECT od.order_id, SUM(p.product_price) AS total_price
		FROM order_details od
		JOIN products p ON od.product_id = p.product_id
		GROUP BY od.order_id
	) AS order_totals ON o.order_id = order_totals.order_id
	GROUP BY u.user_id, u.user_name, o.order_id
	ORDER BY u.user_id, max_total_price DESC;
