export default {
    items: [
        {
            name: '대시보드',
            url: '/dashboard',
            icon: 'icon-speedometer',
            badge: {
                variant: 'primary',
                text: 'NEW'
            }
        },

        {
            title: true,
            name: '프로젝트 관리'
        },
        {
            name: '현장 일정 관리',
            url: '/theme/colors',
            icon: 'icon-calendar'
        },
        {
            name: '현장 계약 관리',
            url: '/theme/typography',
            icon: 'icon-note',
            children: [
                {
                    name: '계약 현황 조회',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '계약 정보 등록',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '계약자 정보 관리',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '동호수 현황표',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '현장 수납 관리',
            url: '/theme/typography',
            icon: 'icon-loop',
            children: [
                {
                    name: '현장 수납 현황',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '건별 수납 등록',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '고객 고지 관리',
            url: '/theme/typography',
            icon: 'icon-envelope-letter',
            children: [
                {
                    name: '수납 고지서 출력',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: 'SMS 발송 관리',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: 'MAIL 발송 관리',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '주소록 라벨 관리',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '발송 로그 기록',
                    url: '/theme/typography',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '사업 예산 관리',
            url: '/theme/typography',
            icon: 'icon-share-alt',
            children: [
                {
                    name: '자금 집행 현황',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '자금 인출 등록',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '건별 미지급금 관리',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '사업 수지 관리',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '현장 문서 관리',
            url: '/theme/typography',
            icon: 'icon-doc',
            children: [
                {
                    name: '[수신] 문서 관리',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '[발송] 문서 관리',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '소송 기록 관리',
                    url: '/theme/typography',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '계약(약정)서 등록',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '규약(내규) 등록',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '기타 문서 등록',
                    url: '/theme/typography',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '현장 등록 관리',
            url: '/base',
            icon: 'icon-location-pin',
            children: [
                {
                    name: '프로젝트 목록',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '프로젝트 등록',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '지번별 부지 관리',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '소유자별 부지 관리',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '현장 정보 설정',
            url: '/base',
            icon: 'icon-pie-chart',
            children: [
                {
                    name: '차수 분류 등록',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '층별 조건 등록',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '향별 조건 등록',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '세대별 분양가 등록',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '납부 회차 등',
                    url: '/base/forms',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '회차별 납부금 등록',
                    url: '/base/jumbotrons',
                    // icon: 'icon-puzzle'
                }
            ]
        },

        {
            title: true,
            name: '본 사 관 리'
        },
        {
            name: '본사 문서 관리',
            url: '/base',
            icon: 'icon-docs',
            children: [
                {
                    name: '[내부] 기안 문서',
                    url: '/base/breadcrumbs',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '[수신] 문서 관리',
                    url: '/base/cards',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '[발송] 문서 관리',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '소송 기록 관리',
                    url: '/theme/typography',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '계약(약정)서 등록',
                    url: '/base/carousels',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '규약(내규) 등록',
                    url: '/base/collapses',
                    // icon: 'icon-puzzle'
                },
                {
                    name: '기타 문서 등록',
                    url: '/theme/typography',
                    // icon: 'icon-puzzle'
                }
            ]
        },
        {
            name: '본사 자금 관리',
            url: '/buttons',
            icon: 'icon-plus',
            children: [
                {
                    name: '자금 일보',
                    url: '/buttons/standard-buttons',
                    // icon: 'icon-cursor'
                },
                {
                    name: '입출금 내역 조회',
                    url: '/buttons/dropdowns',
                    // icon: 'icon-cursor'
                },
                {
                    name: '입출금 내역 등록',
                    url: '/buttons/button-groups',
                    // icon: 'icon-cursor'
                },
                {
                    name: '은행 계좌 등록',
                    url: '/buttons/brand-buttons',
                    // icon: 'icon-cursor'
                }
            ]
        },
        {
            name: '본사 인사 관리',
            url: '/charts',
            icon: 'icon-people',
            children: [
                {
                    name: '직원 정보 관리',
                    url: '/icons/coreui-icons',
                    // icon: 'icon-star',
                    badge: {
                        variant: 'info',
                        text: 'NEW'
                    }
                },
                {
                    name: '성과 정보 관리',
                    url: '/icons/flags',
                    // icon: 'icon-star'
                },
                {
                    name: '부서 정보 관리',
                    url: '/icons/font-awesome',
                    // icon: 'icon-star',
                    badge: {
                        variant: 'secondary',
                        text: '4.7'
                    }
                },
                {
                    name: '직급 정보 관리',
                    url: '/icons/simple-line-icons',
                    // icon: 'icon-star'
                }
            ]
        },

        // {
        //     divider: true
        // },

        {
            title: true,
            name: '기 타 관 리'
        },
        {
            name: '환 경 설 정',
            url: '/notifications',
            icon: 'icon-settings',
            children: [
                {
                    name: '내 프로필 관리',
                    url: '/notifications/alerts',
                    // icon: 'icon-bell'
                },
                {
                    name: '회사 정보 관리',
                    url: '/notifications/badges',
                    // icon: 'icon-bell'
                },
                {
                    name: '작업 기록 보기',
                    url: '/notifications/modals',
                    // icon: 'icon-bell'
                },
                {
                    name: '사용자 등록 관리',
                    url: '/widgets',
                    // icon: 'icon-calculator',
                    badge: {
                        variant: 'primary',
                        text: 'NEW'
                    }
                },
                {
                    name: '권한 설정 관리',
                    url: '/icons/font-awesome',
                    // icon: 'icon-star',
                    badge: {
                        variant: 'secondary',
                        text: '4.7'
                    }
                },
                {
                    name: '번역 등록 관리',
                    url: '/icons/simple-line-icons',
                    // icon: 'icon-star'
                }
            ]
        }

        // {
        //     name: 'Pages',
        //     url: '/pages',
        //     icon: 'icon-star',
        //     children: [
        //         {
        //             name: 'Login',
        //             url: '/pages/login',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Register',
        //             url: '/pages/register',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Error 404',
        //             url: '/pages/404',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Error 500',
        //             url: '/pages/500',
        //             icon: 'icon-star'
        //         }
        //     ]
        // },
        // {
        //     name: 'Disabled',
        //     url: '/dashboard',
        //     icon: 'icon-ban',
        //     badge: {
        //         variant: 'secondary',
        //         text: 'NEW'
        //     },
        //     attributes: { disabled: true },
        // },
        // {
        //     name: 'Dashboard',
        //     url: '/dashboard',
        //     icon: 'icon-speedometer',
        //     badge: {
        //         variant: 'primary',
        //         text: 'NEW'
        //     }
        // },
        //
        // {
        //     title: true,
        //     name: 'Theme',
        //     class: '',
        //     wrapper: {
        //         element: '',
        //         attributes: {}
        //     }
        // },
        // {
        //     name: 'Colors',
        //     url: '/theme/colors',
        //     icon: 'icon-drop'
        // },
        // {
        //     name: 'Typography',
        //     url: '/theme/typography',
        //     icon: 'icon-pencil'
        // },
        //
        // {
        //     title: true,
        //     name: 'Components',
        //     class: '',
        //     wrapper: {
        //         element: '',
        //         attributes: {}
        //     }
        // },
        // {
        //     name: 'Base',
        //     url: '/base',
        //     icon: 'icon-puzzle',
        //     children: [
        //         {
        //             name: 'Breadcrumbs',
        //             url: '/base/breadcrumbs',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Cards',
        //             url: '/base/cards',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Carousels',
        //             url: '/base/carousels',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Collapses',
        //             url: '/base/collapses',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Forms',
        //             url: '/base/forms',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Jumbotrons',
        //             url: '/base/jumbotrons',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'List Groups',
        //             url: '/base/list-groups',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Navs',
        //             url: '/base/navs',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Navbars',
        //             url: '/base/navbars',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Paginations',
        //             url: '/base/paginations',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Popovers',
        //             url: '/base/popovers',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Progress Bars',
        //             url: '/base/progress-bars',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Switches',
        //             url: '/base/switches',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Tables',
        //             url: '/base/tables',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Tabs',
        //             url: '/base/tabs',
        //             icon: 'icon-puzzle'
        //         },
        //         {
        //             name: 'Tooltips',
        //             url: '/base/tooltips',
        //             icon: 'icon-puzzle'
        //         }
        //     ]
        // },
        // {
        //     name: 'Buttons',
        //     url: '/buttons',
        //     icon: 'icon-cursor',
        //     children: [
        //         {
        //             name: 'Buttons',
        //             url: '/buttons/standard-buttons',
        //             icon: 'icon-cursor'
        //         },
        //         {
        //             name: 'Button Dropdowns',
        //             url: '/buttons/dropdowns',
        //             icon: 'icon-cursor'
        //         },
        //         {
        //             name: 'Button Groups',
        //             url: '/buttons/button-groups',
        //             icon: 'icon-cursor'
        //         },
        //         {
        //             name: 'Brand Buttons',
        //             url: '/buttons/brand-buttons',
        //             icon: 'icon-cursor'
        //         }
        //     ]
        // },
        // {
        //     name: 'Charts',
        //     url: '/charts',
        //     icon: 'icon-pie-chart'
        // },
        // {
        //     name: 'Icons',
        //     url: '/icons',
        //     icon: 'icon-star',
        //     children: [
        //         {
        //             name: 'CoreUI Icons',
        //             url: '/icons/coreui-icons',
        //             icon: 'icon-star',
        //             badge: {
        //                 variant: 'info',
        //                 text: 'NEW'
        //             }
        //         },
        //         {
        //             name: 'Flags',
        //             url: '/icons/flags',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Font Awesome',
        //             url: '/icons/font-awesome',
        //             icon: 'icon-star',
        //             badge: {
        //                 variant: 'secondary',
        //                 text: '4.7'
        //             }
        //         },
        //         {
        //             name: 'Simple Line Icons',
        //             url: '/icons/simple-line-icons',
        //             icon: 'icon-star'
        //         }
        //     ]
        // },
        // {
        //     name: 'Notifications',
        //     url: '/notifications',
        //     icon: 'icon-bell',
        //     children: [
        //         {
        //             name: 'Alerts',
        //             url: '/notifications/alerts',
        //             icon: 'icon-bell'
        //         },
        //         {
        //             name: 'Badges',
        //             url: '/notifications/badges',
        //             icon: 'icon-bell'
        //         },
        //         {
        //             name: 'Modals',
        //             url: '/notifications/modals',
        //             icon: 'icon-bell'
        //         }
        //     ]
        // },
        // {
        //     name: 'Widgets',
        //     url: '/widgets',
        //     icon: 'icon-calculator',
        //     badge: {
        //         variant: 'primary',
        //         text: 'NEW'
        //     }
        // },
        // {
        //     divider: true
        // },
        //
        // {
        //     title: true,
        //     name: 'Extras'
        // },
        // {
        //     name: 'Pages',
        //     url: '/pages',
        //     icon: 'icon-star',
        //     children: [
        //         {
        //             name: 'Login',
        //             url: '/pages/login',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Register',
        //             url: '/pages/register',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Error 404',
        //             url: '/pages/404',
        //             icon: 'icon-star'
        //         },
        //         {
        //             name: 'Error 500',
        //             url: '/pages/500',
        //             icon: 'icon-star'
        //         }
        //     ]
        // },
        // {
        //     name: 'Disabled',
        //     url: '/dashboard',
        //     icon: 'icon-ban',
        //     badge: {
        //         variant: 'secondary',
        //         text: 'NEW'
        //     },
        //     attributes: { disabled: true },
        // },

        // {
        //     name: 'Download CoreUI',
        //     url: 'http://coreui.io/vue/',
        //     icon: 'icon-cloud-download',
        //     class: 'mt-auto',
        //     variant: 'success',
        //     attributes: { target: '_blank', rel: 'noopener' }
        // },
        // {
        //     name: 'Try CoreUI PRO',
        //     url: 'http://coreui.io/pro/vue/',
        //     icon: 'icon-layers',
        //     variant: 'danger',
        //     attributes: { target: '_blank', rel: 'noopener' }
        // },
    ]
}
