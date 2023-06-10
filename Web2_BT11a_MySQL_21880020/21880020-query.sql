/*Câu 1: Cho biết danh sách mã và tên môn học. SXep theo tên môn*/
SELECT *
FROM monhoc mh 
ORDER BY mh.TenMon;

/*Câu 2: Cho biết mã môn, tên môn, mssv, tên sv 
và tên lớp học của sinh viên tham gia với một môn học đó.
Sắp xếp theo tên môn giảm dần, tên sv tăng dần*/
SELECT MH.*, SV.MSSV,SV.TenSV,lh.TenLop 
FROM dkhoc dk LEFT JOIN sinhvien sv ON dk.MaSV=sv.MSSV 
LEFT JOIN monhoc mh ON mh.MaMonHoc=dk.MaMH 
LEFT JOIN lophoc lh ON lh.MaLop=sv.HocLop 
ORDER BY mh.TenMon DESC, SV.TenSV;

/*Câu 3: với từng lớp học cho biết mã lớp, tên lớp và số lượng sinh viên của lớp đó.
sắp xếp kết quả theo tên lớp*/
SELECT lh.MaLop, lh.TenLop, COUNT(sv.MSSV) AS SoLuongSV 
FROM lophoc lh LEFT JOIN sinhvien sv ON sv.HocLop=lh.MaLop 
GROUP BY lh.MaLop, lh.TenLop 
ORDER BY lh.TenLop;

/*Câu 4: với từng môn học, cho biết mã môn, tên môn và số lượng sinh viên đã đăng ký môn học đó*/
SELECT mh.MaMonHoc, mh.TenMon, COUNT(dk.MaSV) AS SoLuongSV 
FROM monhoc mh LEFT JOIN dkhoc dk ON mh.MaMonHoc=dk.MaMH 
GROUP BY mh.MaMonHoc, mh.TenMon;