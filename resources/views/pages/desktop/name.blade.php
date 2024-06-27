<div class="sm:hidden block">
    <p class="text-center text-xs   font-bold capitalize leading-3">{{ ( !empty($first_name) ? $first_name : '')  }}</p>
    <p class="text-center text-xs  font-bold capitalize leading-3">{{ ( !empty($last_name) ? $last_name : '')  }}</p>
</div>
<div class="sm:block hidden">
    <p class="text-center text-sm py-0.5 px-4  font-bold capitalize">  {{ ( !empty($full_name) ? $full_name : '')  }}</p>
</div>