<div x-data="formScope()">
    <form action="" wire:submit.prevent="send">
        <div class="form-group">
            <textarea rows="3" class="form-control" wire:model="body" x-on:keydown.enter="submit"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary btn-block" x-ref="submit">Send</button>
    </form>
</div>

<script>
    function formScope() {
        return {
            submit(e) {
                if (e.shiftKey) return

                this.$refs.submit.click()
            }
        };
    }
</script>
