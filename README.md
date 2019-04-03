# Simple array to xml document
example code:

``` php
include './arr2xml.php';
header('Content-type:text/xml');
$data = array(
    'order' => array(
        'list' => array(
            'books' => array(
                'book'=> array(
                    array('name'=> 'PHP','price'=>100.00,'author'=>'aaron'),
                    array('name'=> 'Java','price'=>50.00,'author'=>'jack'),
                    array('name'=> 'Javascript','price'=>90.00,'author'=>'daimonn'),
                    array('name'=> 'HTML','price'=>10.00,'author'=>'james'),
                )
            ),
            'foods' => array(
                'food' => array(
                    array('name'=>'apple','price'=>5),
                    array('name'=>'banana','price'=>4)
                )
            ),
            'date' => date('Y-m-d\TH:i:s')
        ),
        'page' => 0,
        'pagesize'=> 20
    )
);

echo arr2xml($data);
```

output:

```xml
<order>
	<list>
		<books>
			<book>
				<name>PHP</name>
				<price>100</price>
				<author>aaron</author>
			</book>
			<book>
				<name>Java</name>
				<price>50</price>
				<author>jack</author>
			</book>
			<book>
				<name>Javascript</name>
				<price>90</price>
				<author>daimonn</author>
			</book>
			<book>
				<name>HTML</name>
				<price>10</price>
				<author>james</author>
			</book>
		</books>
		<foods>
			<food>
				<name>apple</name>
				<price>5</price>
			</food>
			<food>
				<name>banana</name>
				<price>4</price>
			</food>
		</foods>
		<date>2019-04-03T01:16:22</date>
	</list>
	<page>0</page>
	<pagesize>20</pagesize>
</order>
```