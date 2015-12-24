<?php

/*

!! 모든 이미지는 텀블러로 ㄱㄱㄱ !!

$data[i][0] = 코드명
$data[i][1] = 팀명 한글
$data[i][2] = 팀명 영어
$data[i][3] = 작품명 한글
$data[i][4] = 작품명 영어

$data[i][5] = 기획의도 한글
$data[i][6] = 기획의도 영어
$data[i][7] = 재료/기법 한글
$data[i][8] = 재료/기법 영어
$data[i][9] = index에서 띄울 섬네일 url

$data[i][10] = 팀로고
$data[i][11] = 팀소개
$data[i][12] = 트리이미지 array

*/

$gangdong10 = 'https://40.media.tumblr.com/e5f6c577dcf856afaeff9d3aff61e753/tumblr_nz1lmlE3kG1uoe058o1_540.jpg';
$gangdong11 = '2014년 12월, 재사용되지 않는 폐자원의 업사이클(Upgrade+Recycle)을 통해 창조적 재활용 문화를 선도하고자 강동구 재활용센터 내부에 리사이클 아트센터가 신축되었습니다.</p><p>▲19개 부스에 26명의 각각 다른 장르의 작가들이 모여 창작활동과 판매, 교육활동을 하는 ‘오픈창작 스튜디오’ ▲70여명의 작가들이 작품을 판매할 수 있는 ‘아트샵’ ▲작가들이 작품을 전시할 수 있는 ‘전시공간’ ▲작가들이 각자 또는 함께 콜라보로 교육할 수 있는 ‘교육공간’으로 이뤄진 전국 최초의 재활용 복합예술공간이라고 할 수 있습니다.</p><p>오픈창작스튜디오에서는 단순 창작활동은 물론, 동시에 수명을 다 하거나 못쓰게 된 각종 재료(자전거, 유리, 일러스트, 종이, 가죽, 섬유, 조명, 쥬얼리, 자수, 도자기, 한지, 목공, 금속 등)를 활용하여 재활용 폐자재를 예술적 가치로 새로 태어나게 하는 업사이클 작업이 활발히 진행 중입니다.</p><p><i class="fa fa-map-marker"></i> 강동구 동남로 930 (연중무휴 오전 9시 30분 ~ 오후 7시 30분)</p><p><a class="button button-big external" href="tel:024296114" target="_blank"><i class="fa fa-phone"></i> 02-429-6114</a>';

$data = array(
	'gangdong1' => array(
		'gangdong1',
		'강동 리사이클링 아트센터 A',
		'GANGDONG RECYCLE ART CENTER A',
		'안녕, 12월',
		'Hello, December',
		'작가 강나래, 강선형, 백하나, 장민정이 만든 이번 업사이클링 트리는 작가들의 작업 주재료(유리, 금속, 실, 가죽)를 활용하여 다양한 재료의 조화를 부각시킨 트리이다.',
		'Four artists, Narrae Kang, Sunhyung Kang, Haha Paik, Minjung Jang made up up-cycling Christmas tree by utilizing main material of the artists (bottle glass, metal, yarn, leather). This tree highlights the combination of various materials.',
		'소재: 유리, 금속, 실, 가죽, 나무<br />기법, 라미네이팅, 퓨징, 컷팅, 각 재료들의 섬세한 부착',
		'materials: bottle glass, metal, threads, leather, timbers<br />technique: laminating, fusing, cutting, pasting',
		'https://41.media.tumblr.com/b69af2882f0524de8ef9fcc4064535f7/tumblr_nzc3g4PA1c1uoe058o6_540.jpg',
		$gangdong10,
		$gangdong11,
		'images' => array(
			'https://41.media.tumblr.com/b69af2882f0524de8ef9fcc4064535f7/tumblr_nzc3g4PA1c1uoe058o7_540.jpg',
			'https://41.media.tumblr.com/6c6d8e422907aaef3985c25bb9da1011/tumblr_nzc3g4PA1c1uoe058o9_540.jpg',
			'https://40.media.tumblr.com/46db5539f38cf14aff126bad7bf0812b/tumblr_nzc3g4PA1c1uoe058o8_540.jpg',
			'https://41.media.tumblr.com/c7af4dad37d99a77d463bfa582fdb0fc/tumblr_nzc3g4PA1c1uoe058o10_540.jpg'
		)
	),
	'gangdong2' => array(
		'gangdong2',
		'강동 리사이클링 아트센터 B',
		'GANGDONG RECYCLE ART CENTER B',
		'수린이의 카드',
		'From. Surin',
		'작가 강나래, 강선형, 백하나, 장민정이 만든 이번 업사이클링 트리는 카드 형태로 된 크리스마스 트리이며 산타의 선물을 기다리는 어린이의 설렘과 소망을 표현한다. 전형적인 나무 형태의 트리에서 벗어나 어린이의 창의적인 생각이 투영된 접이식 트리이다.',
		'Four artists, Narrae Kang, Sunhyung Kang, Haha Paik, Minjung Jang made up up-cycling Christmas tree in card form which shows the hope and excitement of the children waiting for Santa\'s gifts. This folding tree reflects the creative thinking of children away from the tree of the typical wooden form.',
		'소재: 버려진 합판, 못, 불량 실, 사용 후 남은 페인트<br />기법: 못으로 트리 형태를 만들고 실로 엮어 트리 모양을 완성시킴',
		'materials: plywood, nails, string, paint<br />technique, tree-shaped woven thread',
		'https://41.media.tumblr.com/cbcdc75b80f36d929e24f573daaf89c2/tumblr_nzc3g4PA1c1uoe058o1_540.jpg',
		$gangdong10,
		$gangdong11,
		'images' => array(
			'https://41.media.tumblr.com/b438a8d82ec057e45f95eadcdfd1055d/tumblr_nzc3g4PA1c1uoe058o2_540.jpg',
			'https://41.media.tumblr.com/79044eb48cf4dd731509b34df73ce558/tumblr_nzc3g4PA1c1uoe058o3_540.jpg',
			'https://40.media.tumblr.com/93f6b29505aff037a2aecea325bc546e/tumblr_nzc3g4PA1c1uoe058o4_540.jpg',
			'https://41.media.tumblr.com/041b0b74a76191f878fdba9265ad589d/tumblr_nzc3g4PA1c1uoe058o5_540.jpg'
		)
	),
	'gangdong3' => array(
		'gangdong3',
		'강동 리사이클링 아트센터 C',
		'GANGDONG RECYCLE ART CENTER C',
		'물구나무',
		'Head Stand',
		'작가 김수희, 김정숙, 안선영, 한정현의 작품 <물구나무>의 주제는 축제의 반전과 일탈입니다. 더 이상 사람들이 앉지 않던 의자들이 물구나무를 섰습니다. 등받이가 땅을 딛고 다리는 하늘로 뻗은 물구나무 선 의자들이 아름다운 반전, 행복한 새해를 기원합니다.',
		'Artist Kim Soo-hee, Kim Joung-sook, An Sun-young, and Han Jung-hyun. Our theme is festival twists and deviations. Chairs that are no longer used are upside-down. The back of the chair is on the floor and its legs are facing the sky. The beautiful transformation of the chairs wish you all the best in the coming year.',
		'낡은 원목의자 7개를 거꾸로 엮어 세우고, 페인팅을 한 뒤 조명을 달았습니다.',
		'Production : Seven old wooden chairs were put upside down, painted and then the lighting were put in.',
		'http://41.media.tumblr.com/aa9955a82939d1dcd5be10b878dc9bc7/tumblr_nzc39sEWiT1uoe058o1_540.jpg',
		$gangdong10,
		$gangdong11,
		'images' => array(
			'http://40.media.tumblr.com/9cd55ea5974755111385dfaf9119df92/tumblr_nzc39sEWiT1uoe058o2_540.jpg',
			'http://36.media.tumblr.com/da1d0394311d609c5072b798b83c620c/tumblr_nzc39sEWiT1uoe058o3_540.jpg',
			'http://41.media.tumblr.com/2bfbff0c97561ef504ef1daa85d76d47/tumblr_nzc39sEWiT1uoe058o4_540.jpg'
		)
	),
	'gangdong4' => array(
		'gangdong4',
		'강동 리사이클링 아트센터 D',
		'GANGDONG RECYCLE ART CENTER D',
		'크리스마스 선물 나무',
		'Christmas gift tree',
		'한지혜 작가가 만든 업사이클링 트리는 어린시절 크리스마스날 산타할아버지가 어떤 선물을 주실지 기대하며 설레었던 추억들을 크리스마스 선물상자에 담아서 하나의 트리로 탄생되었다.',
		'Up-cycling trees made by Jihae Han, the artist, were born of boxes containing our childhood memories of gifts that Grand Father, Santa Clause would give us.',
		'한지혜 작가는 크리스마스 선물상자들을 알루미늄과 철망으로 상자의 틀을 만들고, 포장지를 대신하여 자투리가죽으로 철망에 엮어가며 솔방울 등과 같이 장식하였다. 알록달록 다양한 크기의 선물상자들이 높이 쌓여 하나의 트리로 완성되었고, 철망 사이마다 조명들이 비춰 만들어진 그림자들이 트리의 장식을 더해주고 있다.',
		'She made the frame of gift boxes with aluminium and wire net intertwined with leftover pieces of leather in place of wrapping papers and decorated with pine cones and etc. Dappled gift boxes in various sizes are stacked high to form a tree and shadows made by lightings through the wire net add more decorations to the tree.',
		'http://40.media.tumblr.com/6d44911b0f8c24d53e7db18d6bc8da75/tumblr_nzc3h0Opzm1uoe058o2_540.jpg',
		$gangdong10,
		$gangdong11,
		'images' => array(
			'http://41.media.tumblr.com/b2ed96d471ce3fd1f68374c426a5260c/tumblr_nzc3h0Opzm1uoe058o1_540.jpg',
			'http://36.media.tumblr.com/f4877c6f9a8db8bcff6356e2af3cbabe/tumblr_nzc3h0Opzm1uoe058o3_540.jpg',
			'http://40.media.tumblr.com/18b8669691753263f79bf9348484bc5b/tumblr_nzc3h0Opzm1uoe058o4_540.jpg'
		)
	),
	'jihwan' => array(
		'jihwan',
		'바다쓰기',
		'usingsea',
		'겨울집 트리',
		'winter tree house',
		'‘바다쓰기(Using Sea)’는 제주도 해안가에 떠밀려온 바다쓰레기를 통해 동화적인 상상을 하는 아트 그룹이다. 트리는 동화속에 등장할 것 같은 작은 집으로 완성되었다. 집은 따뜻하다. 집은 내가 돌아가야 할 목적지이기도 하다. 여러분들은 그 목적지에서 더 많은 상상을 시작하게 될 것이다.',
		'Using Sea is art group to the sea fairytale imagination through rubbish on the sea pushed to the island shore. It was completed in a little house like a fairy tale to appear in the tree. The house is warm. Home is wherever I have to go back. You will start the more imagination from the destination.',
		'제주도에서 1년에 발생하는 해양 쓰레기의 양은 약 2만 톤이다. 제주도는 큰 돈(수십억 원)으로 이 문제를 해결한다. 하지만 그 양은 1년에 9천 톤에 불과하다. 바다쓰기는 그 해양 쓰레기에 주목했다. 트리의 재료는 플라스틱, 유목, 고철 등이다. 트리는 쉬운 이동을 위해 분해, 조립이 가능하게 만들었다.',
		'The amount of marine waste a year on Jeju Island is about 2 million tons. Jeju Island solves this problem with a lot of money (tens of billions). However, the amount is only 9000 tons per year. Using Sea (alias Sea Writing) has to be noted that marine litter. The material of the tree is plastic, driftwood, scrap metal and so on. Tree decomposition for easy movement, the assembly is made possible.',
		'http://40.media.tumblr.com/257500f0bded4b09f4706d74addec7af/tumblr_nzc3j6eF3g1uoe058o1_540.jpg',
		'http://40.media.tumblr.com/6736e2c479655b89bb0831a5fd27fb93/tumblr_nz1lmlE3kG1uoe058o3_540.jpg',
		'바다에 버려진 모든 것들이 소재이다. 동화 속의 어느 한 장면 상상 속의 이야기가 곧 주제이다.</p>
		<p>바다쓰기는 해안가에 떠밀려온 모든 것들을 대상으로 아름다운 상상을 합니다.</p>
		<p><a class="button button-big external" href="https://www.facebook.com/usingsea/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a><br />
		<a class="button button-big external" href="http://blog.naver.com/usingsea/" target="_blank"><i class="fa fa-globe"></i> 네이버 블로그</a>',
		'images' => array(
			'http://41.media.tumblr.com/c17491e41f184a20e620db2fd2e11b69/tumblr_nzc3j6eF3g1uoe058o2_540.jpg',
			'http://41.media.tumblr.com/240eb360344bdd0d516b4137e86b35fb/tumblr_nzc3j6eF3g1uoe058o3_540.jpg',
			'http://41.media.tumblr.com/025b67caa9a948e0c2394ccaa90c0ea5/tumblr_nzc3j6eF3g1uoe058o4_540.jpg'
		)
	),
	'2ndb' => array(
		'2ndb',
		'세컨드비',
		'2nd B',
		'파이프 트리',
		'Pipe Tree',
		'12월에만 사용되는 크리스마스 트리. 겨울이 오기 전 크리스마스 트리는 창고에서 잠을 자고, 크리스마스가 지나면 폐기되기도 합니다. 사용하지 않는 기간에 다른 곳에 유용하게 쓰인다면 어떨까요? 이 트리는 크리스마스가 지나, 쓰임을 다해도 일상에서 언제나 유용하게 사용됩니다. 일정한 유닛을 통해 운동기구, 또는 수납장, 옷걸이 등으로 변신합니다. 이번 크리스마스가 지나면 이 트리는 무엇이 될까요?',
		'Christmas trees are only used in December. Before winter comes, Christmas trees sleep in the basement and after Christmas they get trashed. What if they get used appropriate, in the period of inactivity? This tree, even after Christmas, can be used valuably. By using some units this tree can become a sports equipment, storage closet, or even a hanger! What would this tree become after Christmas?',
		'이 트리는 건축 현장에서 나온 소재들로 제작되었습니다. 이 소재들은 불량이거나 현장에서 사용 이후에 남은 파이프들입니다. 특별한 기법 없이 재단을 통해 일정한 유닛을 만들고, 그 유닛을 조립하여 PVC 파이프 트리가 제작되었습니다.',
		'This tree was made by defective products or leftover PVC pipes from a construction site. Without any special technique, the units were made through the foundation, and by assembling the units a slightly rough PVC pipe tree has been made!',
		'http://41.media.tumblr.com/73eeee4aac489b596f2ee6aba1f0204f/tumblr_nzc39sEWiT1uoe058o5_540.jpg',
		'http://41.media.tumblr.com/330e96cb924029880b98bb8afef07f3a/tumblr_nz1lmlE3kG1uoe058o4_400.jpg',
		'2nd B는 지속가능한 디자인, 진정한 의미의 업사이클링 디자인을 위해 출발한 브랜드입니다. 어딘가에 사용되었던 사물을 새로운 시각으로 바라보고 새로운 용도로 사용되도록 합니다. 도색이나 가공 등의 제작공정을 최소화하여 사물이 가지고 있는 흔적을 고스란히 담아내는데 초점을 두었습니다. 이렇게 또 한번의 생명을 얻어 태어난 착한 제품을 통해 구매자들이 착한 소비를 할 수 있도록 유도하고 있습니다.</p>
		<p><a class="button button-big external" href="https://www.facebook.com/2ndbproject/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a><br />
		<a class="button button-big external" href="http://blog.naver.com/2ndbpro/" target="_blank"><i class="fa fa-globe"></i> 네이버 블로그</a>',
		'images' => array(
			'http://40.media.tumblr.com/51b53de7efb2ec63fedaa90f487bfdb7/tumblr_nzc39sEWiT1uoe058o6_540.jpg',
			'http://41.media.tumblr.com/eac7601985a690500852dede395c52ce/tumblr_nzc39sEWiT1uoe058o7_540.jpg',
			'http://36.media.tumblr.com/906f3124dd1060b35e21c0209ef85a85/tumblr_nzc39sEWiT1uoe058o8_540.jpg',
			'http://36.media.tumblr.com/6ff382978b6fc309116df62b49ddc529/tumblr_nzc39sEWiT1uoe058o10_540.jpg'
		)
	),
	'urbanground' => array(
		'urbanground',
		'어반그라운드',
		'URBANGROUND',
		'트리: - 트래쉬리본',
		'T[Re]: - Trash Reborn',
		'자전거 인구 1000만 시대인 만큼 자전거 레져를 이용하는 사람들도 많아졌다. 하지만 자전거 사용인구가 늘어나는 만큼 버려지는 자전거 또한 많아지고 있다. 단순히 자전거 거치대에 두고 몇년을 방치하며 버려지는 자전거가 사회 문제가 되고 있는 시점에서 폐자전거를 다시 생각해보자라는 메세지를 대중에 던지기 위해 버려진 자전거를 업사이클링하였다.',
		'There is an increasing number of people using bicycle more than 10 million. However, increasing number of bikers also means the increasing number of forbidden bikes. We want to give the message to the world by creating the tree made of old bikes someone scraped and neglected on the roadside.',
		'버려진 자전거의 바퀴를 5가지 모듈로 층층이 쌓아 크리스마스트리가 가지는원뿔형태의 모양을 구성하도록 제작하였다. 뼈대와 가지를 만들고 그 위에 모듈이 된 자전거 바퀴를 걸치는 방식으로 매스를 형성하였다.',
		'We made a tree using 5 type modules of bicycle wheels creating form of a cone like a christmas tree. Column and branches support heavy bicycle wheel modules and form a massive shape.',
		'http://36.media.tumblr.com/c167529cbf22a04de07f45e4cff3100a/tumblr_nzc3j6eF3g1uoe058o5_540.jpg',
		'http://41.media.tumblr.com/a10e5192665ca0694bc91dabecfc2281/tumblr_nz1lmlE3kG1uoe058o2_540.jpg',
		'도시 내 조금 파손되거나 개선 가능성이 있는 공간을 큰 비용을 통한 복구가 아닌, 작은 아이디어의 실현과 변화로 웃음을 줄 수 있는 공간을 제공하는 것을 목표로 활동하는 그룹입니다.</p>
		<p><a class="button button-big external" href="https://www.facebook.com/urbangroundxu/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a>',
		'images' => array(
			'http://41.media.tumblr.com/80a3478729caf4d0cf55cfe7a444ebab/tumblr_nzc3j6eF3g1uoe058o6_540.jpg',
			'http://40.media.tumblr.com/19139e423fe326b33b1922a378e9ba49/tumblr_nzc3j6eF3g1uoe058o8_540.jpg',
			'http://40.media.tumblr.com/b39199b6f7292c766111c77805bcbd52/tumblr_nzc3j6eF3g1uoe058o9_540.jpg',
			'http://40.media.tumblr.com/14e7c7b71e9f6a22cb0663d2c0271d14/tumblr_nzc3j6eF3g1uoe058o10_540.jpg'
		)
	),
	'patrickyeom' => array(
		'patrickyeom',
		'염지홍&이유지',
		'Yeom Jihong & EUG',
		'크리스마스에 무지개가 뜬다면?',
		'Rainbow on Christmas Day',
		'평범함 속에서 특별함을 느끼게 만드는 경험을 줄 수 있다면 어떨까 생각했습니다. 일상에서 볼 수 있는 흔한 소재인 35g짜리 가벼운 철사 옷걸이의 연결이 만들어 낼 수 있는 견고함과 아름다움을 표현하고 싶었습니다. 누구나 만들어 볼 수 있고, 누구나 즐길 수 있는 예술 경험으로 이어질 수 있으면 좋겠습니다.',
		'What if I can give the experience to feel special in mediocrity. I wanted to express the robustness and beauty that can be expressed by connection of common material - 35g light wire hanger that can be seen everyday. I wish upcycling hanger Christmas tree work could lead the people to have art experience that everyone can enjoy in their life.',
		'일상에서 쉽게 구할 수 있는 세탁소 옷걸이를 케이블타이로 묶어 원뿔 구조를 만들었습니다. 옷걸이를 맨 아래에서부터 일정 간 간격으로 한 줄씩 묶는 방식으로 패턴을 표현했습니다. 색깔 방울 역시 저렴하게 살 수 있는 다이소 제품을 사용했습니다. 옷걸이, 케이블타이, 색깔 방울 세 가지 소재만을 활용함으로써 심플함을 표현했습니다.',
		'I created a cone structure with metal hangers and cable ties which are very accessible material. I expressed the pattern in a way that connects hangers at regular intervals from the bottom to the top. I used the cheap Daiso products to decorate hanger tree. it expresses the simplicity and with using only three materials Wire hangers, Cable ties, colorful balls.',
		'http://41.media.tumblr.com/82fb196b39155233a1766edb39f95465/tumblr_nzc3h0Opzm1uoe058o5_540.jpg',
		'http://40.media.tumblr.com/ec0275b146cdefcb6132db3d5efd7c04/tumblr_nz1lmlE3kG1uoe058o7_540.jpg',
		'<ul><li>한국외국어대학교 이란어과 졸업</li><li>피자쏠레 마케팅/홍보 및 배달</li><li>마포 성서초등학교 지역운영위원</li><li>주한영국문화원 환경개선 아이디어 E-idea 공모전 수상 (2011년 7월)</li><li>‘2041’ 국제남극탐사 참가 (2012)</li><li>영국왕립예술학교 RCA(Royal College of Art) – 서비스 디자인 석사과정 입학 (2013년 10월)</li></ul></p>
		<p><a class="button button-big external" href="https://www.facebook.com/jihong.passion/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a><br />
		<a class="button button-big external" href="http://passiondesign.co.kr/" target="_blank"><i class="fa fa-globe"></i> 공식 홈페이지</a>',
		'images' => array(
			'http://40.media.tumblr.com/33765df0ccd5415d149fb5f7f544f043/tumblr_nzc3h0Opzm1uoe058o6_540.jpg',
			'http://41.media.tumblr.com/1d9a26ce6e117a4e863865bae2ae6ef4/tumblr_nzc3h0Opzm1uoe058o7_540.jpg',
			'http://41.media.tumblr.com/190c75239e9ac2c7859b95e3d23f0250/tumblr_nzc3h0Opzm1uoe058o8_540.jpg',
			'http://36.media.tumblr.com/17452a97aaa35652cbcfc7f2c3166e25/tumblr_nzc3h0Opzm1uoe058o9_540.jpg'
		)
	),
	'omkim' => array(
		'omkim',
		'옮김',
		'OmKim',
		'크레파스 옮김 인 러브',
		'Crayon OmKim in Love',
		'옮김은 버려지는 비누, 크레파스, 이면지를 재가공하여 필요로 하는 국내외 지역으로 전달하는 시민 사회 단체입니다. 우리 주변에서 쉽게 버려지는 것들이 단순히 그 물건의 기존 역할뿐만 아니라 더 새로운 것들로 탄생할 수 있음을 나타내고, 그것을 우리 모두가 함께 나눌 수 있도록 기획하였습니다.',
		'OmKim collects and recycles unwanted soap, crayon and used paper to deliver them for the people in need all over the world. We want to share the value of those unwanted products with our tree by refreshing crayon boxes to be a new creature for the moment of love.',
		'이번 ‘크리스마스 옮김 인 러브’ 트리는 다 사용하고 버려진 크레파스 상자를 위로 쌓아 엮어 만들었습니다. 트리 제작에는 크레파스를 기부해 주신 일반 시민 분들도 함께 참여하여 트리로 함께 만들며, 새로운 ‘옮김’에 도전할 수 있었습니다.',
		'Our \'Crayon Omkim in Love\' Tree is made of discarded crayon boxes. We collected them with unwanted crayons, laid one upon another, and put up the wood sticks. Some of poeple who donated the crayons joined us to make this tree together.',
		'http://40.media.tumblr.com/f9bff809de3146c872b0634bf6e87c4d/tumblr_nzc3ieyA761uoe058o5_540.jpg',
		'http://41.media.tumblr.com/5f14b232e90826e3f1d17a6e54b8ec11/tumblr_nz1lmlE3kG1uoe058o5_540.png',
		'‘누군가에게는 버림, 누군가에게는 옮김’이라는 모토 아래, 열정 가득한 청년들이 함께 활동하는 청년 시민단체입니다. 옮김은 버려지는 자원을 새로운 가치로 옮기는 활동을 합니다. 현재는 비누와 크레파스, 이면지를 모아 재가공하여 그것들을 필요로 하는 지역으로 옮기는 활동을 하고 있습니다.</p><p><i class="fa fa-map-marker"></i> 은평구 통일로 684 1동 1층 청년허브 미닫이사무실 1호</p>
		<p><a class="button button-big external" href="tel:07044652265" target="_blank"><i class="fa fa-phone"></i> 070-4465-2265</a><br />
		<a class="button button-big external" href="https://www.facebook.com/omkim2012/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a><br />
		<a class="button button-big external" href="http://www.omkim.org/" target="_blank"><i class="fa fa-globe"></i> 공식 홈페이지</a>',
		'images' => array(
			'http://40.media.tumblr.com/9e757ff3d0b0464dcfbdbb72dab3caff/tumblr_nzc3ieyA761uoe058o6_540.jpg',
			'http://40.media.tumblr.com/a6c70858759b8476175e719a17ff79a3/tumblr_nzc3ieyA761uoe058o7_540.jpg',
			'http://41.media.tumblr.com/ca2513ede14aec113185741ac1ccda2b/tumblr_nzc3ieyA761uoe058o8_540.jpg',
			'http://40.media.tumblr.com/e8cbe5b7dced4572e311741f857c5cf6/tumblr_nzc3ieyA761uoe058o10_540.jpg'
		)
	),
	'firemarkers' => array(
		'firemarkers',
		'파이어마커스',
		'FIRE MARKERS',
		'희생 후에 남겨진 것들',
		'Left after the sacrifice',
		'소방관 분들에게 화재 현장 후 남겨지는 것이 무엇이 있을까 생각해 보았습니다. 보이지 않는 희생, 헌신 등이 있지만 보이는 부분에서 소방관분들이 사용하신 낡은 방화복, 낡은 소방호스가 있다는 것을 생각했고 그 의미를 다시 한 번 더 느껴보자는 의미에서 업사이클링 트리를 제작해보았습니다.',
		'We wanted to remind the unseen sacrifices of the firefighters with the visible Christmas tree made with their used items. The worn out fire fighting suits, old fire hose, anything left behind after the fierce fire ― they would make the visitors think of the firefighters\' devotion.',
		'한 소방서에서 1년에 폐기되는 소방호스는 화재발생 유무에 따라 다르지만 적게는 20개에서 많이는 100개까지도 발생된다. 전국에 소방서가 약 260개 정도임을 생각하면 많은 양의 호스가 의미 없이 버려지고 있는 것이다. 파이어 마커스는 의미 없이 버려지는 소방호스를 가치 있게 만들고자 트리를 생각하였다. 트리는 이동이 쉽게 가능하도록 조립식으로 제작되었다.',
		'Approximately, one single fire station dumps out 20 to 100+ fire hoses every year, depending on the number of fire cases. That is the huge amount of meaningless waste when considering that there are 260 fire stations in South Korea. Fire Markers is trying to add values to that kind of wastes, so they\'ve come up with the idea of the fashionable Christmas tree made with them. The tree is fabricated, so it\'s easy to install and remove.',
		'http://40.media.tumblr.com/ef033ff85d2a308a5e6cb33351f1bb52/tumblr_nzc3ieyA761uoe058o1_540.jpg',
		'http://41.media.tumblr.com/32b75890fe20c9dac2dbc44b33dc6071/tumblr_nz1lmlE3kG1uoe058o6_540.jpg',
		'‘소방의 흔적’이라는 뜻의 FIRE MARKERS는 폐호스를 가방으로 재탄생시키는 소방 패션 전문 브랜드입니다. 판매 수익의 일부를 소방복지에 사용합니다. 사회적기업가육성사업 4기에 선정된 바 있습니다.</p>
		<p><a class="button button-big external" href="https://www.facebook.com/firemarkers/" target="_blank"><i class="fa fa-facebook"></i> 페이스북</a>',
		'images' => array(
			'http://41.media.tumblr.com/a3281b7221a358a115ff8590a1e0962f/tumblr_nzc3ieyA761uoe058o2_540.jpg',
			'http://41.media.tumblr.com/6a9157b9c1310982d76f32a41b4760cb/tumblr_nzc3ieyA761uoe058o3_540.jpg',
			'http://41.media.tumblr.com/ad3b40eb9b999db36ee95164633b9b60/tumblr_nzc3ieyA761uoe058o4_540.jpg'
		)
	)
);

function copyright($name='') {
	$str = '&copy; 2015';
	$year = date("Y");
	if ($year != 2015) {
		$str .= '-'.$year;
	}
	$str .= ' '.$name;
	$str .= ', All rights reserved. Developed by Eojin K.';
	echo $str;
}