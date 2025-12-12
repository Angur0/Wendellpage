<template>
    <div class="guitar-quote-calculator">
        <h3>Quick Repair Estimate</h3>
        <p style="margin-bottom: 1.5rem;">Get an instant estimate for common repairs</p>
        
        <div class="form-group">
            <label for="guitar-type">Guitar Type</label>
            <select v-model="guitarType" id="guitar-type">
                <option value="">Select guitar type</option>
                <option value="electric">Electric</option>
                <option value="acoustic">Acoustic</option>
                <option value="bass">Bass</option>
                <option value="classical">Classical</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="repair-type">Repair Type</label>
            <select v-model="repairType" id="repair-type">
                <option value="">Select repair type</option>
                <option value="setup" data-price="4200">Setup & Adjustment</option>
                <option value="restring" data-price="1960">Restring</option>
                <option value="electronics" data-price="8400">Electronics Repair</option>
                <option value="fretwork" data-price="11200">Fret Dressing</option>
                <option value="pickup" data-price="5600">Pickup Replacement</option>
                <option value="refinish" data-price="28000">Refinishing</option>
            </select>
        </div>
        
        <div v-if="showEstimate" class="estimate-result">
            <h4>Estimated Cost</h4>
            <div class="price">₱{{ estimatedPrice.toLocaleString() }}</div>
            <p style="font-size: 0.9rem; color: #666;">This is a base estimate. Final cost may vary based on guitar condition and specific requirements.</p>
            <button @click="requestQuote" class="btn" style="margin-top: 1rem;">Request Detailed Quote</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'GuitarQuoteCalculator',
    data() {
        return {
            guitarType: '',
            repairType: '',
            prices: {
                setup: 4200,
                restring: 1960,
                electronics: 8400,
                fretwork: 11200,
                pickup: 5600,
                refinish: 28000
            }
        }
    },
    computed: {
        showEstimate() {
            return this.guitarType && this.repairType;
        },
        estimatedPrice() {
            return this.prices[this.repairType] || 0;
        }
    },
    methods: {
        requestQuote() {
            window.location.href = '/contact';
        }
    }
}
</script>

<style scoped>
.guitar-quote-calculator {
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 1.5rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

select {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-family: inherit;
    font-size: 1rem;
}

select:focus {
    outline: none;
    border-color: #2563eb;
}

.estimate-result {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
    margin-top: 2rem;
}

.estimate-result h4 {
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.price {
    font-size: 3rem;
    font-weight: bold;
    margin: 1rem 0;
}

.estimate-result p {
    color: rgba(255, 255, 255, 0.9);
}

.estimate-result .btn {
    background-color: white;
    color: #667eea;
}

.estimate-result .btn:hover {
    background-color: #f3f4f6;
}
</style>
