<template>
    <div class="container m-4">
        <button type="submit" class="btn btn-primary" @click="openModal">Open Modal</button>
        
        <modal v-show="isModalVisible" @close-modal="closeModal" />
    </div>
</template>

<script> 
import modal from './ModalComponent' 
    
export default {
    components: {
        modal, 
    },
    data(){
        return {  
            isModalVisible: false,  
        }
    },  
    methods: {  
        openModal() { 
            this.isModalVisible = true;
        }, 
        closeModal() {
            this.isModalVisible = false;
        }, 
    }
}
</script>
