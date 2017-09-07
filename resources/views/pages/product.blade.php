@extends('layouts.pageLayout')

@section('title')<title>About Us - GoldClip</title>@stop

@section('css-reference')
	<link href="/assets/css/product.css" rel="stylesheet">
	<link href="/assets/js/slick/slick.css" rel="stylesheet">
@stop

@section('body')
<div class="uppertitle">LOVE WOOL</div>
<div class="lowertitle">GOLD CLIP</div>
<div></div>
<section class="container"> 
    <div id="carousel" class="panels-backface-invisible">
      	<div class="num_text">
	      		<div class="number">01</div>
	      		<div class="text">Gold Clip<br>- 我们的质量</div>
	  		</div>
	  		<div class="num_text"><div class="number">02</div><div class="text">产品认证</div></div>
		    <div class="num_text"><div class="number">03</div><div class="text">产品特性</div></div>
        <div class="num_text"><div class="number">04</div><div class="text">产品使用须知</div></div>
        <div class="num_text"><div class="number">05</div><div class="text">购买产品</div></div>
        <div class="num_text"><div class="number">06</div><div class="text">售后服务</div></div>
        <div class="num_text"><div class="number">07</div><div class="text">产品退货</div></div>
    </div>
  </section>
 
<section class="container2">
	<div id="carousel2" class="panels-backface-invisible">
    <!-- 1 -->
		<div class="ppt">
			<div class="product-right">
          <h2>“</h2>
          <label class="detail-right-sologan">
              我们热爱羊毛，热爱生活，<br>
              与羊毛生活与共，呼吸与共，<br>日夜相伴。
          </label>
          <br><br>
          <span>Gold Clip</span>
          <p class="special-padding">Gold Clip原材料均采集于澳洲本地由Poll Dorset协会认证的牧羊场，这些牧羊场的每一只羊均受澳洲有关动物身份识别及管理部门Shearwell Australia的监管；羊毛经澳洲羊毛协会Woolmark认证；并在维多利亚羊毛处理机构Victoria Wool Processor澳洲仅有的三家羊毛处理和供应商中最大的一家，做羊毛净化处理，羊毛来源经过VWP和羊毛牧场双重认证，品质保证。</p>
          <div class="product-item">
            <div class="item-name">
              我们的质量
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">百分百澳洲Downs党斯羊毛。

              百分百澳洲制造及拥有-拥有“澳洲制造”认证。

              百分百豪华高支纯棉被面，柔软光滑、透气清爽、极致触感。

              百分百纯羊毛认证，澳洲羊毛协会-国际羊毛局认证。  

              采用澳洲顶级的Pool Dorset 无角陶赛特羊背部的羊毛。

              通过国际OEKO-TEX-Standard 100有害物质检验认证，对人体健康无害。  

              哮喘患者适用；抗菌防螨，有利于减少哮喘和过敏的发生机率。

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
      </div>
		</div>
    <!-- 2 -->
		<div class="ppt">
      <div class="product-right">
  				<div class="product-item special-margin">
            <div class="item-name">
              <img src="/assets/img/product-2-1.png">
              <span>Australian Made<br>澳洲制造</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-2.png">
              <span>Woolmark<br>国际羊毛局，纯羊毛认证</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-3.png">
              <span>OEKO-TEX<br>无害物质，检验认证</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-4.png">
              <span>Poll Dorset<br>无角陶赛特羊</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-2-5.png">
              <span>5 Years Warranty<br>五年质保</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
      </div>
		</div>
    <!-- 3 -->
		<div class="ppt">
			<div class="product-right">
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-1.png">
              <span class="special-line-height">透气性</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-2.png">
              <span class="special-line-height">深度睡眠</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-3.png">
              <span class="special-line-height">保温性 冬暖夏凉</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-4.png">
              <span class="special-line-height">碳化羊毛抗菌防螨</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-5.png">
              <span class="special-line-height">防过敏</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-6.png">
              <span class="special-line-height">100%棉质被面</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              <img src="/assets/img/product-3-7.png">
              <span class="special-line-height">手工双边缝制</span>
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。</p>
            </div>
          </div>
      </div>
		</div>
    <!-- 4 -->
    <div class="ppt">
      <div class="product-right">
          <div class="product-item special-margin-2">
            <div class="item-name">
              初次使用前
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。

              Gold Clip 采用长达约32微米的羊毛，确保被子里的羊毛填充物不会穿出被面，是婴儿/小孩呼吸健康的最佳选择。

              防螨防过敏，良好的透气性可以让身体在睡眠过程中保持一个恒温从而达到更深度睡眠，特别对于关节疾病患者更能起到一个很好的保护作用。

              手工双层缝边，对被子里的羊毛起到更好的固定作用，不会出现被子填充物与被面脱离的情况。

              羊毛溯源可询，值得信赖。

              五年质保</p>
            </div>
          </div>
          <div class="product-item">
            <div class="item-name">
              羊毛被品洗涤
            </div>
            <div class="item-expand" onclick="expand(this)"></div>
            <div class="item-des">
              <p class="item-content">

              羊毛经碳化处理，无有害物质，可抑制细菌滋生和虫咬虫蛀，具有防腐、防虫、防蛀防潮湿和安全作用。优质的Gold Clip羊毛经过水洗、脱脂、炭化、梳理加工成被子的内胆，天然、舒适、环保。</p>
            </div>
          </div>
      </div>
    </div>

    <!-- 5 -->
    <div class="ppt relative">
      <div class="product-right-5">
          <div class="product-select">
              <div class="product-warm">
                <img src="/assets/img/high-warm.png">
              </div>
              <div class="product-detail">
                <div class="p-title">高暖冬被 550克（GMS）</div>
                <div class="p-price left">
                  <label class="p-p-title"><?=$product[0]['title']?></label><br>
                  <label class="p-p-price"><?=$product[0]['price']?></label><br>
                  <label class="p-p-part"><?=$product[0]['id']?></label>
                </div>
                <div class="p-price right">
                  <label class="p-p-title"><?=$product[1]['title']?></label><br>
                  <label class="p-p-price"><?=$product[1]['price']?></label><br>
                  <label class="p-p-part"><?=$product[1]['id']?></label>
                </div>
              </div>
          </div>
          <div class="product-select">
              <div class="product-warm">
                <img src="/assets/img/four-season.png">
              </div>
              <div class="product-detail">
                <div class="p-title">四季被 400克（GMS）</div>
                <div class="p-price left">
                  <label class="p-p-title"><?=$product[2]['title']?></label><br>
                  <label class="p-p-price"><?=$product[2]['price']?></label><br>
                  <label class="p-p-part"><?=$product[2]['id']?></label>
                </div>
                <div class="p-price right">
                  <label class="p-p-title"><?=$product[3]['title']?></label><br>
                  <label class="p-p-price"><?=$product[3]['price']?></label><br>
                  <label class="p-p-part"><?=$product[3]['id']?></label>
                </div>
              </div>
          </div>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right">联系我们购买</div></a>
      </div>
    </div>

    <!-- 6  -->
    <div class="ppt relative">
      <div class="product-right relative">
          <p>
          Gold Clip – Premium Australia Wool Product 顶级羊毛被品根据澳大利亚《消费者法》提供必要的质保服务。如出现重大产品的问题，您有权换货或退货，我们对出现的质量问题做出必要的维修维护，若维护后产品未能达到可接受的质量满意度或缺陷无法修复，则您还有权要求更换或退款。
          <br><br>
          除上述提及的法定质保外，Gold Clip也为我们的产品提供五年质保，保证产品无生产的缺陷；如有任何疑问请联系我们。
          <br><br><span style="color:#896C4C">• 携带产品前往出售该产品的授权代理商处/或寄回中国/澳洲售后服务处；</span>
          <br><br><span style="color:#896C4C">• 致电Gold Clip客户服务热线，工作时间为周一至周五上午9:30 – 下午5:00（澳大利亚东部标准时间）。</span>
          <br><br>
          如果根据本质保规定提出任何索赔，必须提供产品购买证明副本，例如收据或付款记录。除非提供购买证明，否则根据本质保提出的索赔要求视为无效。如果未提出有效索赔，您将无法获得本质保利益。
          <br><br>
          如携带购买证明与产品前往授权经销商处，产品将被送至Gold Clip接受评估。如有可能，所有产品均应以原包装退回。
          <br><br>
          致电Gold Clip客户服务团队将帮助您确定产品是否需要评估，并帮您安排将产品退回以接受评估。
          </p>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right">联系我们购买</div></a>
      </div>
    </div>

    <!-- 7  -->
    <div class="ppt relative">
      <div class="product-right relative">
          <p class="brown special-margin">
          退回产品必须附带以下详细信息：<br>
          • 姓名；<br>
          • 地址；<br>
          • 联系方式；<br>
          • 购买凭证；<br>
          • 产品缺陷简要描述；<br>
          • 产品使用情况简要说明。<br>
          </p>
          <p>
          收到根据本质保提出的索赔后，如Gold Clip确定产品索赔有效，则将免费为您更换相同或相似产品，如有邮寄费用，还将为您报销将产品寄送至Gold Clip的快递费用。
          <br><br>
          收到根据本质保提出的索赔后，如Gold Clip 确定产品索赔无效，则Gold Clip将通过快递公司将该产品退回您在提交索赔时提供的地址。如果索赔无效，您将无法报销产品送交评估产生的快递费用。
          </p>
          <a href="/contact?language=<?=$text['language']?>"><div class="btn right">联系我们购买</div></a>
      </div>
    </div>
	</div>
</section>

<div class="left-block">
<section class="container3">
	<div id="carousel3">
		<figure class="current-tab" data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
			<i class="fa fa-circle" aria-hidden="true"></i>01 我们的质量
		</figure>
		<figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
			<i class="fa fa-circle" aria-hidden="true"></i>02 产品认证
		</figure>
		<figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
			<i class="fa fa-circle" aria-hidden="true"></i>03 产品特性 
		</figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 产品使用须知
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 购买产品 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 售后服务
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 产品退货 
    </figure>
    <figure data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>01 我们的质量
    </figure>
    <figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>02 产品认证
    </figure>
    <figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
      <i class="fa fa-circle" aria-hidden="true"></i>03 产品特性 
    </figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 产品使用须知
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 购买产品 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 售后服务
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 产品退货 
    </figure>
    <figure data-up="PREMIER QUALITY" data-low="MULTIPLE QUALIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>01 我们的质量
    </figure>
    <figure data-up="AUSTRALIAN MADE" data-low="WOOLMARK CERTIFICATION">
      <i class="fa fa-circle" aria-hidden="true"></i>02 产品认证
    </figure>
    <figure data-up="DEEP SLEEP" data-low="ANTI-ALLEGY">
      <i class="fa fa-circle" aria-hidden="true"></i>03 产品特性 
    </figure>
    <figure data-up="LOVE WOOL" data-low="GOLD CLIP">
      <i class="fa fa-circle" aria-hidden="true"></i>04 产品使用须知
    </figure>
    <figure data-up="HIGHEST WARM" data-low="EVERYDAY">
      <i class="fa fa-circle" aria-hidden="true"></i>05 购买产品 
    </figure>
    <figure data-up="QUALITY GUARANTEE" data-low="5 YEARS WARRENTY">
      <i class="fa fa-circle" aria-hidden="true"></i>06 售后服务
    </figure>
    <figure data-up="NO HASSLE" data-low="ENJOY SLEEP">
      <i class="fa fa-circle" aria-hidden="true"></i>07 产品退货 
    </figure>
	</div>
</section>
</div>

<div class="main">
    <ul id="game-list" class="game-list">
        <li>
            <div class="game-box box-1 game-boxdefault">
                <div class="game-front">
                    <div class="game-cover">
                        <!-- <div class="specular"></div> -->
                    </div>
                </div>
                <div class="game-right"></div>
                <div class="game-side">
                      <!-- <div class="specular-left"></div> -->
                </div>
                <div class="game-back">
                </div>
            </div>  
        </li>
    </ul>
</div><!--main-->

@stop

@section('js-reference')
<script src="/assets/js/underscore-min.js"></script>
<script src='/assets/js/slick/slick.js'></script>
@stop

@section('js-function')
<script>
	var breakpoint = 9;
</script>
<script src='/assets/js/goldclip.js'></script>
<script>
	$('#carousel').slick({
	  draggable:false,
	  vertical: true,
	  arrows: false,
	});
	$('#carousel2').slick({
	  vertical: true,
	  draggable:false,
	  arrows: false,
	});

  $(window).on('mousewheel DOMMouseScroll', _.debounce(function(e){
    var direction = (function () {
          var delta = (e.type === 'DOMMouseScroll' ?
                       e.originalEvent.detail * -40 :
                       e.originalEvent.wheelDelta);
          return delta > 0 ? 0 : 1;
      }());
      if(direction === 0) {
        rotateBox(-1);
      }
      if(direction === 1) {
        rotateBox(1);
      }
  }, 500, {immediate:true}));

  var degree = 30;
  function rotateBox(a){
    var oldDegree = 0;
    var  obj = $(".game-list li .game-box.game-boxdefault")[0];
    var rotate = obj.style.transform;
    if (rotate != ""){
      oldDegree = rotate.split('rotateY(')[1].split("deg)")[0]
    } 
    var newDegree = parseInt(oldDegree) + (a * degree);
    newDegree = "rotateY(" + newDegree + "deg)";
    $(".game-list li .game-box.game-boxdefault")[0].style.transform = newDegree;
  }

  function expand(obj){
    var target = $(obj).siblings(".item-des");
    var height = target.children("p").height() + 60;
    if (target.height() == 0){
      target.height(height);
    } else {
      target.height(0);
    }
    var sliderCurrent = $(obj).parent().parent().parent();
    var parent = $(obj).parent();
    var scroll = parent[0].offsetTop - sliderCurrent[0].offsetTop;
    sliderCurrent.animate({ scrollTop: scroll }, "500");
  }
</script>
@stop



