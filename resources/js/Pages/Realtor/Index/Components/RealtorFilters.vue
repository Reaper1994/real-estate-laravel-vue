<template>
  <form>
    <div class="mb-4 mt-4 flex flex-wrap gap-4">
      <div class="flex flex-nowrap items-center gap-2 text-white">
        <input
          id="deleted"
          v-model="filterForm.deleted"
          type="checkbox"
          class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
        />
        <label for="deleted">Deleted</label>
      </div>

      <div>
        <select v-model="filterForm.by" class="input-filter-l w-24">
          <option value="created_at">Added</option>
          <option value="price">Price</option>
        </select>
        <select v-model="filterForm.order" class="input-filter-r w-32">
          <option
            v-for="option in sortOptions"
            :key="option.value" :value="option.value"
          >
            {{ option.label }}
          </option>
        </select>
      </div>
        <button type="reset" class="btn-primary" @click="clear">Clear</button>
    </div>
  </form>
</template>

<script setup>
import { reactive, watch, computed } from 'vue';
import { Inertia } from '@inertiajs/inertia'; // Corrected import for Inertia
import debounce from 'lodash/debounce';

const sortLabels = {
    created_at: [
        {
            label: 'Latest',
            value: 'desc',
        },
        {
            label: 'Oldest',
            value: 'asc',
        },
    ],
    price: [
        {
            label: 'Pricey',
            value: 'desc',
        },
        {
            label: 'Cheapest',
            value: 'asc',
        },
    ],
};

const props = defineProps({
    filters: Object,
});

const filterForm = reactive({
    ...props.filters, // Initialize filterForm with props.filters values
    deleted: props.filters.deleted?? false,
    by: props.filters.by?? 'created_at',
    order: props.filters.order?? 'desc',
});

const sortOptions = computed(() => sortLabels[filterForm.by]);
const onlyParams = ['listings'];

watch(filterForm, debounce(() => {
    const queryParams = new URLSearchParams();
    queryParams.append('deleted', filterForm.deleted.toString());
    queryParams.append('by', filterForm.by);
    queryParams.append('order', filterForm.order);

    // Use Inertia.visit for navigation, ensuring we don't cause a full page reload
    Inertia.visit(route('realtor.listing.index') + '?' + queryParams.toString(), {
        only: ['listing', 'offerMade'],
        preserveState: true,
        preserveScroll: true,
    });
}, 1000));
</script>
