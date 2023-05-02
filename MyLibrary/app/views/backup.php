<div id="second-block" class="relative mt-300 hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <div class="pointer-events-none fixed mt-9 right-0 flex max-w-full pl-10">
    <div class="pointer-events-auto max-w-md">
      <div class="flex h-90 flex-col overflow-y-scroll bg-white shadow-xl">
        <div id="cart" class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
          <div class="flex items-start justify-between">
            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
          </div>

          <div class="mt-8">
            <div class="flow-root">
              <ul role="list" id="cart-items" class="-my-6 divide-y divide-gray-200">
                <li id="shopping" class="flex py-6">
                  <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                  </div>

                  <div class="ml-4 flex flex-1 flex-col">
                    <div>
                      <div class="flex justify-between text-base font-medium text-gray-900">
                        <h3>
                          <a href="#">Throwback Hip Bag</a>
                        </h3>
                        <p class="ml-4">$90.00</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Salmon</p>
                    </div>
                    <div class="flex flex-1 items-end justify-between text-sm">
                      <p id="quantity" class="text-gray-500">Qty 0</p>

                      <div class="flex">
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="removeCartItem(this)">Remove</button>
                      </div>
                    </div>
                  </div>
                </li>

             
                  <!-- More products... -->
                  <!-- <div class="cart"></div> -->
                </ul>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p id="cart-total">$262.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
              <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
              <p>
                or
                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Continue Shopping
                  <span aria-hidden="true"> &rarr;</span>
                </button>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>













