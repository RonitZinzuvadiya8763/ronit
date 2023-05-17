Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
A: ["PETER","BEN","JOE"];

Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
A: ["35","37","43"];

Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
A: ["PETER"=>"35","BEN"=>"37","JOE"=>"43"];

Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
A: ["peter"=>"35","ben"=>"37","joe"=>"43"];

Q: ["35","37","43","30","24","47","27"];
A: lower to upper;
A: upper to lower;
A: lower and upper using function;

Q:["35","37","43","30","24","47","27"];
A:Create array with 3(n) values like [ ["35","37","43"], ["30","24"]] using function

Q:[35, "abc", -43, 30, 24, "jck", 27, -5];
A:["abc", -43,"jck",-5]
  [35,30, 24, 27]

Q:['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];
A: sort arrays into single array
  
Q:$arr = array(
    array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
    ),
    array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
    ),
    array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
    )
    );
A:create array for lastname values

Q:$keys = ['id', 'frstname', 'lastname'];
  $values = [[3, 4, 5], [50, 60, 70], [15, 45, 85]];
A:[['id' ="3",
   'frstname' = "4",
   'lastname' = "5"],
   ['id' ="50",
   'frstname' = "60",
   'lastname' = "70"],
   ['id' ="15",
   'frstname' = "45",
   'lastname' = "85"]];