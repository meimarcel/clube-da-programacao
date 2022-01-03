class Dashboard {
    constructor() {
        this.formFilter = document.getElementById('form-filter');
        this.selectType = document.getElementById('tipo');
        this.checkboxAll = document.getElementById('select-all');
        this.checkboxs = document.querySelectorAll("input[type = 'checkbox']")
        this.tbody = document.getElementById('body-table');
        this.modalConfirm = document.getElementById('modal-delete');
        this.btnModalConfirm = document.getElementById('btn-modal-confirm');
        this.btnModalCancel = document.getElementById('btn-modal-close');
        this.btnDeleteAll = document.getElementById('btn-delete-all');
    }

    checkAll() {
        if (this.formFilter) {
            this.checkboxAll.addEventListener('change', () => {
                this.checkboxs.forEach(checkbox => {
                    checkbox.checked = this.checkboxAll.checked;
                    this.buttonVisibility(this.checkboxAll.checked);
                })
            })

        }
    }

    onSubmit() {

        if (this.formFilter) {
            this.formFilter.addEventListener('keyup', function (event) {
                if (event.code === 'Enter') {
                    event.preventDefault();
                    this.submit();
                }
            });

            this.selectType.addEventListener('keypress', (e) => {
                if (e.code === 'Enter') {
                    e.preventDefault();
                    this.submit();
                }
            });
        }
    }

    countChecked(callback) {
        if (typeof callback == 'function') callback();
        if (this.tbody) {
            this.checkboxAll.checked = false;
            this.buttonVisibility(false);
            return this.tbody.querySelectorAll('input[type="checkbox"]:checked').length;
        } else
            return 0
    }


    buttonVisibility(canShow) {
        const deleteSelectedBtn = document.getElementById('delete-selected-btn');
        // const btnDeleteAll = document.getElementById('btn-delete-all');

        if (deleteSelectedBtn) {
            if (canShow) {
                this.btnDeleteAll.disabled = false;
                this.btnDeleteAll.classList.add('cursor-pointer');
                this.btnDeleteAll.classList.replace('cursor-default', 'cursor-pointer');
                deleteSelectedBtn.classList.remove('hide')
            } else {
                this.btnDeleteAll.disabled = true;
                this.btnDeleteAll.classList.replace('cursor-pointer', 'cursor-default');
                deleteSelectedBtn.classList.add('hide');
            }
        }

    }

    onChangeTbody() {
        if (this.tbody) this.tbody.addEventListener('change', () => {
            this.buttonVisibility(this.countChecked() > 0)
            this.checkboxAll.checked = false;
        });
    }

    deleteByIds(ids) {

        if (typeof ids === 'object') {
            ids.forEach(id => {
                const trabalhosTR = document.getElementById('trabalho-id-' + id);
                trabalhosTR.classList.add('animate-pulse', 'bg-red-50', 'border', 'border-red-100');
            })
        } else {
            const trabalhosTR = document.getElementById('trabalho-id-' + ids);
            if (trabalhosTR) {
                trabalhosTR.classList.add('animate-pulse', 'bg-red-50', 'border', 'border-red-100');
            }

        }

        let url = window.location.href + '/trabalhos/destroy';

        fetch(url, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": document.querySelector('input[name=_token]').value
                },
                body: JSON.stringify({
                    'ids': ids
                }),
            })
            .then(response => response.json())
            .then((response) => {
                if (typeof ids === 'object') {
                    ids.forEach(id => {
                        const trabalhosTR = document.getElementById('trabalho-id-' + id);
                        trabalhosTR.remove();
                    })
                    this.checkboxAll.checked = false;
                    this.buttonVisibility(false);
                } else {
                    const trabalhosTR = document.getElementById('trabalho-id-' + ids);
                    trabalhosTR.remove();

                }
                const trs = document.getElementById('body-table').getElementsByTagName('tr');
                if (trs.length == 0) {
                    this.checkboxAll.disabled = true
                    this.tbody.innerHTML = `<td colspan="5">
                <div class="pt-20 pb-5 text-center">
                    <p class="font-semibold mb-5">Nenhum trabalho foi adicionado.</p>
                    <a href="${window.location.href}/trabalhos/create"
                        class="bg-green-500 hover:bg-green-700 text-white text-center py-2 px-4 rounded uppercase">adicionar</a>
                </div>
            </td>`
                }

            }).catch((error) => {
                if (typeof ids === 'object') {
                    ids.forEach(id => {
                        const trabalhosTR = document.getElementById('trabalho-id-' + id);
                        trabalhosTR.classList.remove('animate-pulse', 'bg-red-50', 'border', 'border-red-100');
                    })
                    this.checkboxAll.checked = false;
                    this.buttonVisibility(false);
                } else {
                    const trabalhosTR = document.getElementById('trabalho-id-' + ids);
                    if (trabalhosTR) {
                        trabalhosTR.classList.remove('animate-pulse', 'bg-red-50', 'border', 'border-red-100');
                    }

                }
            })
    }

    excluirTrabalhosSelecionados() {
        if (this.btnDeleteAll) {
            this.btnDeleteAll.addEventListener('click', () => {
                this.btnModalConfirm.addEventListener('click', () => {
                    var ids = [];
                    const checkboxsChecked = this.tbody.querySelectorAll('input[name="ids"]:checked');

                    checkboxsChecked.forEach((checkbox) => {
                        ids.push(checkbox.value);
                    });

                    this.deleteByIds(ids);
                });
            })

        }

    }

    toggle(wrapperEl, mainEl) {
        document.querySelector('body').classList.toggle('overflow-y-hidden');
        wrapperEl.classList.toggle('opacity-100');
        wrapperEl.classList.toggle('opacity-0');
        wrapperEl.classList.toggle('duration-300');
        wrapperEl.classList.toggle('visible');
        wrapperEl.classList.toggle('invisible');
        mainEl.classList.toggle('-translate-y-full');
        mainEl.classList.toggle('duration-300');
        mainEl.classList.toggle('translate-y-0')
    };

    extractElements(target) {
        const wrapper = document.querySelector(`[data-modal='${target}']`);
        const modal = wrapper.querySelector('[data-modal-main]');
        return {
            wrapper,
            modal
        };
    }

    showEvent() {
        return new CustomEvent('show', {
            detail: {},
            bubbles: true,
            cancelable: true,
            composed: false,
        });
    }

    hideEvent() {
        return new CustomEvent('hide', {
            detail: {},
            bubbles: true,
            cancelable: true,
            composed: false,
        });
    }

    doToggle() {
        [...document.querySelectorAll('[data-modal-toggle]')].forEach((btn) =>
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const action = btn.getAttribute('data-modal-action');
                const target = btn.getAttribute('data-modal-toggle');
                const {
                    wrapper,
                    modal
                } = this.extractElements(target);

                if (action === 'open') {
                    modal.dispatchEvent(this.showEvent());
                }
                if (action === 'close') {
                    modal.dispatchEvent(this.hideEvent());
                }
                this.toggle(wrapper, modal);
            })
        );
    }

    init() {
        this.onSubmit();
        this.excluirTrabalhosSelecionados();
        this.onChangeTbody();
        this.checkAll();
        if (!document.querySelector('[data-modal-toggle]')) return;
        if (!document.querySelector('[data-modal')) return;

        this.doToggle();
    }
}

const excluirTrabalho = function (id) {
    const btnModalConfirm = document.getElementById('btn-modal-confirm');
    btnModalConfirm.addEventListener('click', () => {
        dashboard.deleteByIds(id);
    });
}

const editarTrabalho = (id) => window.open(window.location.href + `/trabalhos/${id}/edit`, '_self');

const dashboard = new Dashboard();
dashboard.init();
