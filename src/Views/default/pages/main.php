<?php
/**
 * @var $tag
 * @var $toolbar
 * @var  array $addProducts
 */
?>
<div class="wrapper main">
	<section class="section__banner">
		<article class="banner__text">
			<h1>Tech Shop</h1>
			<p class="banner__title">"Join the <span>digital revolution</span>"</p>
			<a href="/catalog/all/1/">
				<button class="banner__btn">Explore More</button>
			</a>
		</article>
		<article class="banner__image">
			<img src="/assets/images/common/banner1.png" alt="Join the digital revolution banner" class="banner__img">
		</article>
	</section>
</div>
<aside>
	<div class="wrapper">
		<ul class="aside__list">
			<li class="aside__item">
				<a class="aside__link" href="/catalog/accessories/1/">
					<img src="/assets/images/tags/case.svg" alt="accessories" class="aside__img">
					<p class="aside__title">Accessories</p>
				</a>
			</li>
			<li class="aside__item">
				<a class="aside__link" href="/catalog/camera/1/">
					<img src="/assets/images/tags/instacs.svg" alt="Camera" class="aside__img">
					<p class="aside__title">Cameras</p>
				</a>
			</li>
			<li class="aside__item">
				<a class="aside__link" href="/catalog/laptop/1/">
					<img src="/assets/images/tags/laptop.svg" alt="Laptop" class="aside__img">
					<p class="aside__title">Laptops</p>
				</a>
			</li>
			<li class="aside__item">
				<a class="aside__link" href="/catalog/mobile/1/">
					<img src="/assets/images/tags/iphone14.svg" alt="Smart Phone" class="aside__img">
					<p class="aside__title">Smart Phones</p>
				</a>
			</li>
			<li class="aside__item">
				<a class="aside__link" href="/catalog/gaming/1/">
					<img src="/assets/images/tags/console.svg" alt="Gaming" class="aside__img">
					<p class="aside__title">Gaming</p>
				</a>
			</li>
			<li class="aside__item">
				<a class="aside__link" href="/catalog/wearable/1/">
					<img src="/assets/images/tags/watches.svg" alt="Smart Watch" class="aside__img">
					<p class="aside__title">Smart Watches</p>
				</a>
			</li>
		</ul>
	</div>
</aside>
<section>
	<div class="wrapper">
		<div class="product__container">
			<div class="product__header">
				<h3 class="product__title">New Products</h3>
				<a href="/catalog/newProducts" class="products__link">View all <img src="/assets/images/common/blackArrow.svg"
																					alt="View all new products"></a>
			</div>
			<ul class="productSection__list">
				<li class="mainSection__item">
					<a href="/detail/id=?" class="mainSection__link">
						<img src="/assets/images/adminFolder/macbook12.png" alt="product Image" class="mainSection__img">
						<div class="description__section">
							<p class="description__title">Apple MacBook Air 15" w/ Touch ID (2023) - Space Grey (Apple M2 Chip / 256GB SSD / 8GB RAM) - French</p>
							<div class="product__footer_container">
								<p class="product__cost">$1018.00</p>
							</div>
						</div>
					</a>
				</li>
				<li class="mainSection__item">
					<a href="/detail/id=?" class="mainSection__link">
						<img src="/assets/images/adminFolder/macbook12.png" alt="product Image" class="mainSection__img">
						<div class="description__section">
							<p class="description__title">Apple MacBook Air 15" w/ Touch ID (2023) - Space Grey (Apple M2 Chip / 256GB SSD / 8GB RAM) - French</p>
							<div class="product__footer_container">
								<p class="product__cost">$1018.00</p>
							</div>
						</div>
					</a>
				</li>
				<li class="mainSection__item">
					<a href="/detail/id=?" class="mainSection__link">
						<img src="/assets/images/adminFolder/macbook12.png" alt="product Image" class="mainSection__img">
						<div class="description__section">
							<p class="description__title">Apple MacBook Air 15" w/ Touch ID (2023) - Space Grey (Apple M2 Chip / 256GB SSD / 8GB RAM) - French</p>
							<div class="product__footer_container">
								<p class="product__cost">$1018.00</p>
							</div>
						</div>
					</a>
				</li>
				<li class="mainSection__item">
					<a href="/detail/id=?" class="mainSection__link">
						<img src="/assets/images/adminFolder/macbook12.png" alt="product Image" class="mainSection__img">
						<div class="description__section">
							<p class="description__title">Apple MacBook Air 15" w/ Touch ID (2023) - Space Grey (Apple M2 Chip / 256GB SSD / 8GB RAM) - French</p>
							<div class="product__footer_container">
								<p class="product__cost">$1018.00</p>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="wrapper">
		<div class="banners-section">
			<a href="/product/<?=$addProducts[0]?>/" class="banner__link">
				<img src="/assets/images/common/banner3.jpg" alt="Iphone 15 Series banner">
			</a>
			<a href="/product/<?=$addProducts[1]?>/" class="banner__link">
				<img src="/assets/images/common/miniBanner2.png" alt="Play station 5 banner">
			</a>
		</div>
	</div>
</section>

