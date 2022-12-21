<div class="containFilters">
   <div class="div-filters">
    <form action="" class="flex-com formFilters">
        <div class="flex-com categorySel">
            <label for="" class="titleSel">Category</label>
            <select name="" id="">
                <option value="">All</option>
                <option value="">Dellivery</option>
                <option value="">Withour Delivery</option>
            </select>
        </div>
        <div class="flex-com">
            <span class="titleSel">Size</span>
            <div class="tallas flex-com" id="tallasBox">
                <label for="xs">
                    <input id="xs" type="checkbox">
                    <span>XS 80-88</span>
                </label>
                <label for="s">
                    <input id="s" type="checkbox">
                    <span>S 88-96</span>
                </label>
                <label for="m">
                    <input id="m" type="checkbox">
                    <span>M 96-104</span>
                </label>
                <label for="l">
                    <input id="l" type="checkbox">
                    <span>L 104-112</span>
                </label>
                <label for="xl">
                    <input id="xl" type="checkbox">
                    <span>XL 112-124</span>
                </label>
                <label for="xxl">
                    <input id="xxl" type="checkbox">
                    <span>XXL 124-136</span>
                </label>
                <label for="xxxl">
                    <input id="xxxl" type="checkbox">
                    <span>XXXL 136-148</span>
                </label>
            </div>
        </div>
        <div>
            <span class="titleSel">Price</span>
            <div class="inputRange">
                <div id="lineRange" class="lineRange"></div>
                <input id="priceInput1" type="range" value="100" min="0" max="500" oninput="slide1()">
                <input id="priceInput2" type="range" value="400" min="0" max="500" oninput="slide2()">
            </div>
            <div class="valuesBox">
                <span id="valuePriceInput1">35</span>
                <span> - </span>
                <span id="valuePriceInput2">35</span>
            </div>
        </div>
        <div>
            <button>Close</button>
            <button>Apply filters</button>
        </div>
       </form>
   </div>
</div>