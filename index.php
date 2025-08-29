<?php
#البيانات
$students = [ //هنا عملت مصفوفة ب اسم الطلاب وفيها مصفوفات داخلية كل وحدة فيهم تمثل طالب وبياناته

    [
        'stdNo'   => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail'=> 'ahmed@gmail.com',
        'stdGAP'  => 88.7
    ],
    [
        'stdNo'   => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail'=> 'mona@gmail.com',
        'stdGAP'  => 78.5
    ],
    [
        'stdNo'   => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail'=> 'bilal@gmail.com',
        'stdGAP'  => 98.7
    ],
    [
        'stdNo'   => '10005',
        'stdName' => 'Said Ali',
        'stdEmail'=> 'said@gmail.com',
        'stdGAP'  => 98.7
    ],
    [
        'stdNo'   => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail'=> 'mohamed@gmail.com',
        'stdGAP'  => 98.7
    ]
];

// صفوف الجدول
$rows = '';
foreach ($students as $s) {
    $no    = htmlspecialchars($s['stdNo'],   ENT_QUOTES, 'UTF-8');
    $name  = htmlspecialchars($s['stdName'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($s['stdEmail'],ENT_QUOTES, 'UTF-8');
    $gpa   = htmlspecialchars((string)$s['stdGAP'], ENT_QUOTES, 'UTF-8');

    $rows .= "<tr>";
    $rows .= "  <td>{$no}</td>";
    $rows .= "  <td>{$name}</td>";
    $rows .= "  <td><a class=\"mail\" href=\"mailto:{$email}\">{$email}</a></td>";
    $rows .= "  <td>{$gpa}</td>";
    $rows .= "</tr>";
}

$count = count($students);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول الطلاب - تصميم Bootstrap</title>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { /*تنسيقات جميع العناصر الموجودة في ال body*/
            background-color: #E5D7C4;
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Arial, sans-serif;
        }
        
        .student-card { /*تنسيق البطاقة*/
            background-color: #CFBB99;
            border-radius: 12px;
            border: 2px solid #889063; 
            box-shadow: 0 8px 20px rgba(76, 61, 25, 0.2);
        }
        
        .card-header {
            background: linear-gradient(135deg, #354024 0%, #4C3D19 100%);
            color: #E5D7C4; 
            border-bottom: 2px solid #889063;
        }
        /*تنسيق الجدول*/
        .table th { 
            background-color: #354024; 
            color: #E5D7C4; 
            border: none;
            font-weight: 600;
            text-align: center;
            padding: 15px;
        }
        
        .table td {
            background-color: #E5D7C4; 
            text-align: center;
            padding: 12px 15px;
            border-bottom: 1px solid #CFBB99; 
            color: #4C3D19; 
        }
        
        .table-striped tbody tr:nth-child(odd) td {
            background-color: rgba(136, 144, 99, 0.1); 
        }
        
        .table-hover tbody tr:hover td {
            background-color: rgba(53, 64, 36, 0.1); 
            transform: translateY(-1px);
            transition: all 0.3s ease;
        }
        
        .mail { /* تنسيق الروابط الموجودة*/
            color: #354024; 
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .mail:hover {
            color: #4C3D19; 
            text-decoration: underline;
        }
        
        .total-badge {
            background-color: #889063; 
            color: #E5D7C4; 
            font-size: 1.1rem;
            padding: 12px 25px;
            border-radius: 25px;
            border: 1px solid #354024; 
        }
        
        .text-primary {
            color: #354024 !important; 
        }
        
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card student-card">
                    <div class="card-header text-center py-4">
                        <h2 class="fw-bold mb-0">
                            <i class="bi bi-people-fill me-2"></i>
                            قائمة الطلاب
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>رقم الطالب</th>
                                        <th>الاسم</th>
                                        <th>الإيميل</th>
                                        <th>GPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php echo $rows; ?> <!-- دمج phpمع html-->
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-center mt-4">
                            <span class="total-badge">
                                <i class="bi bi-person-check-fill me-2"></i>
                                عدد الطلاب: <?php echo $count; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!--
        يعطيك العافية بشمهندس
    -->